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
//use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use App\Service\MediaUploader;
use App\Repository\MediaRepository;
use App\Repository\TrickRepository;
use App\Repository\UserRepository;
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
    public function add(Request $request, MediaUploader $mediaUploader, EntityManagerInterface $em) : Response
    {
        $trick = new Trick();
        $media = new Media();
        $user = new User();

        $form = $this->createForm(TrickType::class, $trick);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // Call to MediaUploader Service
            $mediaUploader->coverImage($trick);

            $medias = $trick->getMedias();

            foreach ($medias as $media) {

                $media->getTrick($trick);
                // Call to mediaUploader Service
                $mediaUploader->manageMedia($media);
            
                $media->setCaption($media->getCaption());
                $now = new \DateTime('+ 2 hour');
                $media->setDateAdd($now);

                $em->persist($media);
            }

            $videos = $trick->getVideos();

            foreach ($videos as $video) {
                $video->setTrick($trick);
                $video->setUrl($video->getUrl());
                $em->persist($video);
                $em->flush();
            }

            $trick->setUser($this->getUser());
            
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
        //$user = new User();

        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);

        $findTrick = $trickRepo->findById($trick->getId());
        $comments = $commentRepo->findBy(['trick' => $findTrick], ['date_add' => 'DESC'], 5);
        dump($comments);

        if ($form->isSubmitted() && $form->isValid()) {
            $comment->setDateAdd(new \DateTime('+ 2 hour'));
            $comment->setTrick($trick);
            $comment->setUser($this->getUser());

            $entityManager->persist($comment);
            $entityManager->flush();

            $this->addFlash(
                'success',
                'Votre commentaire a été posté !'
            );

            return $this->redirectToRoute('app_trick_view', ['id' => $trick->getId(), '_fragment' => $comment->getId()]);
        }

        $medias = $mediaRepo->findBy(array('trick' => $trick->getId()));
        $videos = $videoRepo->findBy(array('trick' => $trick->getId()));

        return $this->render('Trick/view.html.twig', [
            'trick' => $trick,
            'medias' => $medias,
            'videos' => $videos,
            'comments' => $comments,
            'form' => $form->createView()
        ]);
    }

    /**
     * Get the 5 next comments in the database and create a Twig file with them that will be displayed via Javascript
     *
     * @Route("comment/more/{id}/{start}", name="loadComments", requirements={"id": "\d+", "start": "\d+"})
     */
    public function loadMoreComments(Trick $trick, TrickRepository $trickRepo, CommentRepository $commentRepo, $id, $start = 5)
    {
        $findTrick = $trickRepo->findById($trick->getId());
        $comments = $commentRepo->findBy(['trick' => $findTrick], ['date_add' => 'DESC'], 5, $start);

        return $this->render('Trick/comments_load.html.twig', [
            'comments' => $comments,
            'start' => $start
        ]);
    }

    /**
     * Modifier un trick
     * @Route("trick/edit/{id}", name="app_trick_edit", requirements={"id" = "\d+"})
     */
    public function edit($id, Request $request, MediaUploader $mediaUploader, EntityManagerInterface $em) : Response
    {
        $em = $this->getDoctrine()->getManager();
        $trick = $em->getRepository(Trick::class)->find($id);
        $media = $em->getRepository(Media::class)->find($id);

        $form = $this->createForm(TrickType::class, $trick);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $medias = $trick->getMedias();
            $mediaUploader->coverImage($trick);

            foreach ($medias as $media) {
                $media->getTrick($trick);
                // Call to mediaUploader Service
                $mediaUploader->manageMedia($media);

                $em->persist($media);
            }

            $trick->setDateUpdate(new \DateTime('+ 2 hour'));
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
