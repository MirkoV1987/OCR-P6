<?php

// src/Controller/UserController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;


class UserController extends AbstractController
{

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

    /**
     * Login
     * @Route("user/register", name="app_user_register")
     */
    public function register(Request $request)
    {
        //Si la requête est en POST, l'utilisateur a soumis le formulaire

        if ($request->isMethod('POST')) {

            // Formulaire de login

            $this->addFlash('notice', 'Votre compte a été créé !');

            // Rédirection vers la page d'accueil pour les utilisateurs connectés

            return $this->redirectToRoute('app_user_login', ['id' => 4]);
        }
        // Si on n'est pas en POST, on affiche le formulaire de login
        return $this->render('User/register.html.twig');
    }

}