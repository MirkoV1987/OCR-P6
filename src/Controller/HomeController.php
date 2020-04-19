<?php

// src/Controller/HomeController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\TrickRepository;
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
     * @Route("/", name="app_trick_home", requirements={"page" = "\d+"}, defaults={"page" = 1} )
     */
    public function index(TrickRepository $trickRepository)
    {
        $tricks = $trickRepository->findBy([], ['date_add' => 'DESC'], 15, 0);

        return $this->render('Home/home.html.twig', [
            'tricks' => $tricks
        ]);
    }
    
    /**
     * Get the 15 next tricks in the database and create a Twig file with them that will be displayed via Javascript
     * 
     * @Route("/{start}", name="loadTrick", requirements={"start": "\d+"})
     */
    public function loadTrick(TrickRepository $trickRepository, $start = 15)
    {
        // Get 15 tricks from the start position
        $tricks = $trickRepository->findBy([], ['date_add' => 'DESC'], 15, $start);

        return $this->render('home/tricks_load.html.twig', [
            'tricks' => $tricks
        ]);
    }
}
