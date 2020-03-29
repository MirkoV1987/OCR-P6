<?php

// src/Controller/TrickController.php

namespace App\Controller;

use App\Entity\Trick;
use App\Entity\Media;
use App\Entity\Video;
use App\Entity\User;
use App\Entity\Comment;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\Common\Collections\ArrayCollection;
use App\Form\TrickType;
use App\Form\MediaType;
use App\Form\CommentType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use App\Service\MediaUploader;
use App\Service\VideoUploader;
use App\Repository\MediaRepository;
use App\Repository\TrickRepository;
use App\Repository\VideoRepository;
use App\Repository\CommentRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Twig\Environment;

class TrickController extends AbstractController
{
    /**
     * Ajouter une figure
     * @Route("trick/add", name="app_trick_add", methods={"GET","POST"})
     * @param Request $request
     * @return Response
     */
    public function add(Request $request, MediaUploader $mediaUploader, VideoUploader $videoUploader, EntityManagerInterface $em) : Response
    {
        $trick = new Trick();
        
        $media = new Media();

        $video = new Video();
        $trick->getVideos()->add($video);

        $form = $this->createForm(TrickType::class, $trick);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // Call to MediaUploader Service
            $mediaUploader->coverImage($trick);

            $medias = $trick->getMedias();

            foreach ($medias as $media) {
                // Append each media to Trick
                $media->setTrick($trick);

                // Call to mediaUploader Service
                $mediaUploader->manageMedia($media);
            
                $media->setCaption($media->getCaption());
                $now = new \DateTime('+ 1 hour');
                $media->setDateAdd($now);

                $em->persist($media);
                $em->flush();
            }

            // Call to videoUploader Service
            $videoUploader->uploadTrickVideo($video = [], $trick);
            
            $em->persist($trick);
            $em->flush();

            $this->addFlash(
                'success',
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
    public function view(Trick $trick, Request $request, TrickRepository $trickRepo, CommentRepository $commentRepo, MediaRepository $mediaRepo, VideoRepository $videoRepo, EntityManagerInterface $entityManager)
    {
        $comment = new Comment();

        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $comment->setDateAdd(new \DateTime());
            $comment->setTrick($trick);

            $entityManager->persist($comment);
            $entityManager->flush();
            return $this->redirectToRoute('app_trick_view', ['id' => $trick->getId(), '_fragment' => $comment->getId()]);
        }

        $medias = $mediaRepo->findBy(array('trick' => $trick->getId()));
        $videos = $videoRepo->findBy(array('trick' => $trick->getId()));
        $comments = $commentRepo->findBy(array('trick' => $trick->getId()));

        return $this->render('Trick/view.html.twig', [
            'trick' => $trick,
            'medias' => $medias,
            'videos' => $videos,
            'comments' => $comments,
            'form' => $form->createView()
        ]);
    }

    /**
     * Modifier un trick
     * @Route("trick/edit/{id}", name="app_trick_edit", requirements={"id" = "\d+"})
     */
    public function edit($id, Request $request, MediaUploader $mediaUploader, VideoUploader $videoUploader, EntityManagerInterface $em) : Response
    {
        $em = $this->getDoctrine()->getManager();
        $trick = $em->getRepository(Trick::class)->find($id);
        $media = $em->getRepository(Media::class)->find($id);

        $form = $this->createForm(TrickType::class, $trick);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // Call to MediaUploader Service
            $mediaUploader->coverImage($trick);

            $medias = $trick->getMedias();
            
            foreach ($medias as $media) {
                $media->setTrick($trick);
                $em->persist($media);
            }

            $trick->setDateUpdate(new \DateTime('+ 1 hour'));
            $em->flush();

            $this->addFlash(
                'success',
                'Le trick ' . $trick->getName() . ' a bien été modifié !'
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
    public function delete($id, Request $request, EntityManagerInterface $em) : Response
    {
        $em = $this->getDoctrine()->getManager();
        $trick = $em->getRepository(Trick::class)->find($id);

        $em->remove($trick);
        $em->flush();

        $this->addflash(
            'success',
            "Le trick {$trick->getName()} a été supprimé avec succès !"
        );

        return $this->redirectToRoute('app_trick_home');
    }
}
