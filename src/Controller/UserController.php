<?php

// src/Controller/UserController.php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegisterType;
use App\Form\ProfileType;
use App\Form\FileType;
use App\Service\MailerManager;
use App\Repository\UserRepository;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Doctrine\ORM\EntityManagerInterface;
use Twig\Environment;

class UserController extends AbstractController
{
    /**
     * Register new User
     * @Route("user/register", name="app_user_register")
     */
    public function register(Request $request, EntityManagerInterface $em, UserPasswordEncoderInterface $encoder, MailerManager $mailerManager)
    {
        $user = new User();

        $form = $this->createForm(RegisterType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $user->getFile();
            // Créer un nom unique pour le fichier
            $name = md5(uniqid()) . '.' . $file->guessExtension();
            // Déplace le fichier
            $path = 'img/users';
            $file->move($path, $name);

            $password = $encoder->encodePassword($user, $user->getPassword());
            $confirmPassword = $encoder->encodePassword($user, $user->getConfirmPassword());
            $user->setPassword($password)
                 ->setConfirmPassword($confirmPassword)
                 ->setDateAdd(new \DateTime('+ 1 hour'))
                 ->setIsActive(false)
                 ->setValidationToken(md5(random_bytes(10)));

            $em->persist($user);
            $em->flush();
            
            //Call to MailerController Service
            //$mailer = new MailerInterface();
            //$mailerManager->sendEmail($mailer);

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
     * Show User Profile
     * @Route("user/view/{id}", name="app_user_view", requirements={"id" = "\d+"})
     */
    public function view(User $user, Request $request, UserRepository $userRepo, EntityManagerInterface $em)
    {
        $user = $this->getUser();

        $form = $this->createForm(ProfileType::class, $user);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            $em->persist($user);
            $em->flush();

            $this->addFlash(
                'success',
                'Les modifications du profil ont été enregistrées avec succès !'
            );
        }
        return $this->render('User/profile.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * Edit User Profile
     * @Route("user/edit", name="app_user_edit")
     */
    public function edit(Request $request, EntityManagerInterface $em)
    {
        $em = $this->getDoctrine()->getManager();
        //$user = $em->getRepository(User::class)->findBy($id);
        $user = new User();

        $form = $this->createForm(ProfileType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($user);
            $em->flush();

            $this->addFlash(
                'success',
                'Votre profile a été modifié avec succès !'
            );
        }

        return $this->render('User/profile.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
