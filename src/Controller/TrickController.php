<?php

// src/Controller/TrickController.php

namespace App\Controller;

use App\Entity\Trick;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Form\TrickType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;


class TrickController extends AbstractController
{
    /**
     * Ajouter une figure
     * @Route("trick/add", name="app_trick_add")
     */
    public function add(Request $request)
    {
        $trick = new Trick();

        $form = $this->createForm(TrickType::class, $trick);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $trick = $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($trick);
            $entityManager->flush();

            $this->addFlash('notice', 'Trick enregistré avec succès !');

            return $this->redirectToRoute('app_trick_home');

        }

        return $this->render('Trick/add.html.twig', [
            'form' => $form->createView(),
        ]);    
       
        //TO DO: Vérifier si les données du formulaire sont valides

    }

    /**
     * Présentation d'une figure
     * @Route("trick/view/{id}", name="app_trick_view", requirements={"id" = "\d+"})
     */
    public function view($id)
    {
        // Récupérer ici la figure correspondant à l'id $id

        return $this->render(
            'Trick/view.html.twig',
            ['id' => $id]
        );
    }

    /**
     * Modifier une figure
     * @Route("trick/edit/{id}", name="app_trick_edit", requirements={"id" = "\d+"})
     */
    public function edit($id, Request $request)
    {
        // Récupérer ici l'$id de la figure à modifier
        
        if ($request->isMethod('POST')) {

            // Traitement du formulaire

            $this->addFlash('notice', 'Figure modifiée avec succès !');

            // Redirection vers la view de la figure
            return $this->redirectToRoute('app_trick_view', ['id'=> 4]);  
        }
        // Si on n'est pas en POST, on affiche le formulaire de modification de la figure
        return $this->render('Trick/edit.html.twig');
    }

    /**
     * Supprimer une figure
     * @Route("trick/delete/{id}", name="app_trick_delete", requirements={"id" = "\d+"})
     */
    public function delete($id)
    {
        // Récipérer ici l'$id de la figure à supprimer

        // Générer ici la suppression de la figure

        return $this->render('Trick/delete.html.twig');

    }
}
