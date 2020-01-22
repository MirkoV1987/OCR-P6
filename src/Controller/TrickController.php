<?php

// src/Controller/TrickController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

/**
 * @Route("/index")
 */
class TrickController extends AbstractController
{
    /**
     * @Route("/{page}", name="app_trick_home", requirements={"page" = "\d+"}, defaults={"page" = 1} )
     */
    public function index(Environment $twig)
    {
        $content = $twig->render('Home/home.html.twig', ['name' => 'Mirko']);

        return new Response($content);
    }

    // Présentation d'une figure
    /**
     * @Route("/view/{id}", name="app_trick_view", requirements={"id" = "\d+"})
     */
    public function view($id, Request $request)
    {
        //$url = $this->generateUrl("app_trick_view", ['id' => 87]);

        $tag = $request->query->get('tag');
        return new Response("Affichage de la figure :".$id.", avec le tag :".$tag);
    }

    // Ajouter une figure
    /**
     * @Route("/add", name="app_trick_add")
     */
    public function add()
    {

    }

    // Modifier une figure
    /**
     * @Route("/edit/{id}", name="app_trick_update")
     */
    public function edit($id)
    {

    }

    // Effacer une figure
    /**
     * @Route("/delete/{id}", name="app_trick_delete", requirements={"id" = "\d+"})
     */
    public function delete()
    {

    }
}
