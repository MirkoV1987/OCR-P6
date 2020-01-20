<?php

// src/Controller/TrickController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class TrickController
{
    public function createTrick(Environment $twig)
    {
        $content = $twig->render('Home/createTrick.html.twig', ['name' => 'Mirko']);

        return new Response($content);
    }
}