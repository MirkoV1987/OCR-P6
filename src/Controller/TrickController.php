<?php

// src/Controller/TrickController.php

namespace App\Controller;

use App\Entity\Trick;
use App\Entity\Media;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\TrickRepository;
use App\Form\TrickType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use App\Service\UploaderHelper;
use Gedmo\Sluggable\Util\Urlizer;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class TrickController extends AbstractController
{
    /**
     * Ajouter une figure
     * @Route("trick/add", name="app_trick_add", methods={"GET","POST"})
     * @param Request $request
     * @param UploaderHelper $UploaderHelper
     * @return Response
     */
    public function add(Request $request, UploaderHelper $uploaderHelper) : Response
    {
        $trick = new Trick();
        $form = $this->createForm(TrickType::class, $trick);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            /** @var UploaderHelper $mediaUrl */

            // $mediaFile = new UploadedFile($trick->getMediaFile(), "MediaFile");
            // $mediaUrl = $uploaderHelper->upload($mediaFile);
            // $trick->setMediaFile("$mediaUrl");

            $mediaFile = $form->get('mediaFile')->getData();
            if ($mediaFile) {
                $mediaUrl = $uploaderHelper->upload($mediaFile);
                $trick->setMediaUrl($mediaUrl);
            }
            
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($trick);
            $entityManager->flush();

            $this->addFlash(
                'notice',
                'Trick enregistré avec succès !'
            );

            return $this->redirectToRoute('app_trick_home');
        }

        return $this->render('Trick/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * Présentation d'une figure
     * @Route("trick/view/{id}", name="app_trick_view", requirements={"id" = "\d+"})
     */
    public function view($id, Request $request, TrickRepository $trickRepo)
    {
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
        $trick = new Trick();

        $form = $this->createForm(TrickType::class, $trick);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $trick = $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($trick);
            $entityManager->flush();

            $this->addFlash(
                'notice',
                'Trick enregistré avec succès !'
            );

            return $this->redirectToRoute('app_trick_home');
        }

        return $this->render('Trick/edit.html.twig', [
            'form' => $form->createView(),
        ]);
       
        //TO DO: Vérifier si les données du formulaire sont valides
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
