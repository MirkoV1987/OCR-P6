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
use App\Service\VideoUploader;
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
    public function add(Request $request, UploaderHelper $uploaderHelper, VideoUploader $videoUploader) : Response
    {
        $trick = new Trick();
        $form = $this->createForm(TrickType::class, $trick);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $media = $form['mediaName']->getData();
            $video = $form['videos']->getData();
            $uploaderHelper->uploadTrickFile($media, $trick);
            $videoUploader->getEmbedUrl($video, $trick);
            
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
     * Détails d'un trick
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
     * Modifier un trick
     * @Route("trick/edit/{id}", name="app_trick_edit", requirements={"id" = "\d+"})
     */
    public function edit($id, Request $request, UploaderHelper $uploaderHelper) : Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $trick = $entityManager->getRepository(Trick::class)->find($id);

        if (!$trick) {
            throw $this->createNotFoundException(
                'Aucun trick avec l\'identifiant '.$id. ' n\'a été trouvé'
            );
        }

        $form = $this->createForm(TrickType::class, $trick);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $media = $form['mediaName']->getData();
            $uploaderHelper->uploadTrickFile($media, $trick);

            $trick->setDateUpdate(new \DateTime('+ 1 hour'));
            $entityManager->flush();

            $this->addFlash(
                'success',
                'Le trick <strong>' . $trick->getName() . '</strong> a bien été modifié !'
            );

            return $this->redirectToRoute('app_trick_home', [
                'id' => $trick->getId()
            ]);
        }

        return $this->render('Trick/edit.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * Supprimer un trick
     * @Route("trick/delete/{id}", name="app_trick_delete", requirements={"id" = "\d+"})
     */
    public function delete($id, Request $request) : Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $trick = $entityManager->getRepository(Trick::class)->find($id);

        $entityManager->remove($trick);
        $entityManager->flush();

        $this->addflash(
            'success',
            "Le trick <strong>{$trick->getName()}</strong> a été supprimé avec succès !"
        );

        return $this->redirectToRoute('app_trick_home');
    }
}
