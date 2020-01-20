<?php

// src/Controller/HomeController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class HomeController
{
    /**
     * @Route("/index", name="app_trick_home")
     */
    public function index(Environment $twig)
    {
        $content = $twig->render('Home/home.html.twig', ['name' => 'Mirko']);

        return new Response($content);
    }

    /**
     * @Route("/index/view/{id}", name="app_trick_view")
     */
    public function view($id)
    {
        return new Response("Affichage du trick n.:".$id);
    }

    /**
     * @Route("/index/view/{slug}/{year}/{format}", name="app_trick_view_slug", requirements={
     *     "year" = "\d{4}",
     *     "format" = "html|xml"
     * })
     */
    public function viewTrick($slug, $year, $format)
    {
        return new Response("Figure correspondante au '.$slug.', créée en '$year' au format '.$format.'");
    }
}