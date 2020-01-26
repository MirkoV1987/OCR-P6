<?php

// src/Controller/HomeController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

/***
 * @Route("/", name="home")
 */
class HomeController extends AbstractController
{
    /**
     * @Route("/{page}", name="app_trick_home", requirements={"page" = "\d+"}, defaults={"page" = 1} )
     */
    public function index($page)
    {
        // 1 page doit être égale ou supérieure à 1
        if ($page < 1) {
            //Exception NotFoundHttpExeception, qui lève une exception et redirige vers une page 404 personnalisable
            throw $this->createNotFoundException("Page".$page." inexistante");
        }

        //récuperer ici la liste des figures, puis passer la liste des figures au template

        // appel au template
        return $this->render('Home/home.html.twig', [
            'name' => 'Mirko Venturi'
        ]);
    }
}