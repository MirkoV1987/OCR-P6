<?php

// src/Controller/UserController.php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Trick;
use App\Entity\Comment;
use App\Form\RegisterType;
use App\Form\ProfileType;
use App\Form\FileType;
use App\Repository\UserRepository;
use App\Repository\TrickRepository;
use Symfony\Component\Mime\Email;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Doctrine\ORM\EntityManagerInterface;
use Twig\Environment;

class UserController extends AbstractController
{
    /**
     * Register new User
     * @Route("user/register", name="app_user_register")
     */
    public function register(Request $request, EntityManagerInterface $em, UserPasswordEncoderInterface $encoder, \Swift_Mailer $mailer)
    {
        $user = new User();

        $form = $this->createForm(RegisterType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $user->getFile();
            // Créer un nom unique pour le fichier
            $name = md5(uniqid()) . '.' . $file->guessExtension();
            // Déplace le fichier
            $path = '../assets/img/users';
            $file->move($path, $name);

            $password = $encoder->encodePassword($user, $user->getPassword());
            $validationToken = md5(random_bytes(80));
       
            $user->setPassword($password)
                 ->setAvatar($name)
                 ->setDateAdd(new \DateTime('+ 2 hour'))
                 ->setDateUpdate(new \DateTime('+ 2 hour'))
                 ->setIsActive(false)
                 ->setValidationToken($validationToken);

            $em->persist($user);
            $em->flush();

            $message = (new \Swift_Message('Validation de votre compte SnowTricks'))
            ->setFrom('noreply@snowtricks.com')
            ->setTo($user->getEmail())
            ->setBody(
                $this->renderView('User/emails/account_validation.html.twig', [
                        'user' => $user,
                        'username' => $user->getUsername(),
                        'validationToken' => $user->getValidationToken()
                    ]),
                    'text/html'
                );

            $mailer->send($message);

            $this->addFlash(
                'success',
                "Votre compte a été créé avec succès ! Pour vous connecter, veuillez valider votre compte via le mail qui vous a été envoyé !"
            );

            return $this->redirectToRoute('app_user_login');
        }

        return $this->render('User/register.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * Validation de l'email après une inscription
     * @Route("User/email-validation/{username}/{validationToken}", name="app_user_email_validation")
     */
    public function emailValidation(UserRepository $userRepo, $username, $validationToken, EntityManagerInterface $em)
    {
        $user = $userRepo->findOneByUsername($username);

        if ($validationToken != null && $validationToken === $user->getValidationToken())
        {
            $user->setIsActive(true);
            $em->persist($user);
            $em->flush();

            $this->addFlash(
                'success',
                "Votre compte a été activé avec succès ! Vous pouvez désormais vous connecter !"
            );
        }
        else
        {
            $this->addFlash(
                'danger',
                "La validation de votre compte a échoué. Le lien de validation a expiré !"
            );   
        }

        return $this->redirectToRoute('app_user_login'); 
    }

    /**
     * Get all the tricks posted by the User
     *
     * @Route("trick/user/{id}", name="app_user_tricks", requirements={"id" = "\d+"})
     */
    public function showTricksByUser(Request $request, $id)
    {
        $user = $this->getDoctrine()
        ->getRepository(User::class)
        ->find($id);

        $tricks = $user->getTricks();

        return $this->render('User/user_tricks.html.twig', [
            'tricks' => $tricks,
            'user' => $user
        ]);
    }

    /**
     * Edit User Profile
     * Require ROLE_USER for only this controller method.
     * @Route("user/edit/{id}", name="app_user_edit", requirements={"id" = "\d+"})
     */
    public function edit($id, Request $request, EntityManagerInterface $em)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->find($id);

        $form = $this->createForm(ProfileType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $user->setUsername($user->getUsername());
            $user->setEmail($user->getEmail());

            $em->persist($user);
            $em->flush();

            $this->addFlash(
                'success',
                'Votre profile a été modifié avec succès !'
            );

            return $this->redirectToRoute('app_trick_home');
        }

        return $this->render('User/profile.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * Delete User 
     * @Route("user/delete/{id}", name="app_user_delete", requirements={"id" = "\d+"})
     */
    public function delete($id, Request $request, TrickRepository $trickRepo, EntityManagerInterface $em) : Response
    {
        //Je récupère l'utilisateur à effacer par son $id
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->find($id);
        $findTrick = $em->getRepository(Trick::class)->find($id);

        //Je récupère la Collection de Tricks de l'utilisateur et la stocke dans la variable $userTricks
        $userTricks = $user->getTricks();

        //Je paramètre le setter setIsDeleted (flag $isDeleted dans l'Entité Trick) sur true
        //$findTrick->setIsDeleted(true);
       
        //Je crée le nouvel utilisateur $staff et j'attribue les tricks ($userTricks) de l'$user à effacer 
        $staff = new User();
        $staff->setUsername('staff')
                 ->setPassword(md5(random_bytes(80)))
                 ->setAvatar('user-1.jpeg')
                 ->setEmail('noreply@snowtricks.com')
                 ->getTricks($userTricks);

        //Je persiste l'utilisateur $staff dans la BDD
        $em->persist($staff);
        //Je persiste les tricks
        //$em->persist($userTricks);
        //J'efface l'utilisateur
        $em->remove($user);
        $em->flush();

        $this->addflash(
            'success',
            "L'utilisateur {$user->getUsername()} a été supprimé avec succès !"
        );

        return $this->redirectToRoute('app_trick_home');
    }
}
