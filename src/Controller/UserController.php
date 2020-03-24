<?php

// src/Controller/UserController.php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegisterType;
use App\Service\Mailer;
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
     * Register
     * @Route("user/register", name="app_user_register")
     */
    public function register(Request $request, EntityManagerInterface $em, UserPasswordEncoderInterface $encoder, Mailer $mailer)
    { 
        $user = new User();

        $form = $this->createForm(RegisterType::class, $user);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $file = $user->getFile();
            // Créer un nom unique pour le fichier
            $name = md5(uniqid()) . '.' . $file->guessExtension();
            // Déplace le fichier
            $path = 'img/users';
            $file->move($path, $name);
            // Donner le path et le nom au fichier dans la base de données
            $user->setImagePath($path);
            $user->setImageName($name);

            $password = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($password)
                 ->setDateAdd(new \DateTime('+ 1 hour'))
                 ->setIsActive(false)
                 ->setValidationToken(md5(random_bytes(10)));

            $em->persist($user);
            $em->flush();
            
            //Call to Mailer Service
            $mailer->sendMail($username);

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
     * Login
     * @Route("user/login", name="app_user_login")
     */
    public function login(Request $request)
    {
        //Si la requête est en POST, l'utilisateur a soumis le formulaire

        if ($request->isMethod('POST')) {

            // Formulaire de login

            $this->addFlash('notice', 'Vous etes connecté !');

            // Rédirection vers la page d'accueil pour les utilisateurs connectés

            return $this->redirectToRoute('app_home_logged', ['id' => 4]);
        }
        // Si on n'est pas en POST, on affiche le formulaire de login
        return $this->render('User/login.html.twig');
    }

}