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
use Gedmo\Sluggable\Util\Urlizer;
use App\Repository\MediaRepository;
use App\Repository\TrickRepository;
use App\Repository\VideoRepository;
use App\Repository\CommentRepository;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
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
    public function add(Request $request, MediaUploader $mediaUploader, VideoUploader $videoUploader, EntityManagerInterface $entityManager) : Response
    {
        $trick = new Trick();

        $media = new Media();
        $trick->getMedias()->add($media);

        $video = new Video();
        $trick->getVideos()->add($video);

        $form = $this->createForm(TrickType::class, $trick);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $uploadedFile = $form['name']->getData();

            if ($uploadedFile instanceof UploadedFile) {
                $mediaFileName = $mediaUploader->uploadTrickMedia($uploadedFile);
                $media->setName($mediaFileName);
        }
            //On récupère le traitement des données de la function manageMedia - service MediaUploder
            $mediaUploader->manageMedia($media = [], $trick);

            //On récupère le traitement des données de la function uploadTrickVideo - service VideoUploder
            $videoUploader->uploadTrickVideo($video = [], $trick);
            
            $entityManager->persist($trick);
            $entityManager->flush();

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
        
        //TO DO -> gestion objet User
        //$user = new User; 

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
    public function edit($id, Request $request, MediaUploader $mediaUploader, VideoUploader $videoUploader, EntityManagerInterface $entityManager) : Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $trick = $entityManager->getRepository(Trick::class)->find($id);
        $media = $entityManager->getRepository(Media::class)->find($id);

        if (!$trick) {
            throw $this->createNotFoundException(
                'Aucun trick avec l\'identifiant '.$id. ' n\'a été trouvé'
            );
        }

        $form = $this->createForm(TrickType::class, $trick);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            // //call Media Services
            /** @var MediaUploader $uploadedFile */
            $uploadedFile = $form['name']->getData();
        
            if ($uploadedFile instanceof UploadedFile) {
            $mediaFileName = $mediaUploader->uploadTrickMedia($uploadedFile);
            $media->setName($mediaFileName);
        }

            $mediaUploader->manageMedia($media = [], $trick);

            $videoUploader->uploadTrickVideo($video = [], $trick);

            $trick->setDateUpdate(new \DateTime('+ 1 hour'));
            $entityManager->flush();

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
    public function delete($id, Request $request) : Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $trick = $entityManager->getRepository(Trick::class)->find($id);

        $entityManager->remove($trick);
        $entityManager->flush();

        $this->addflash(
            'success',
            "Le trick {$trick->getName()} a été supprimé avec succès !"
        );

        return $this->redirectToRoute('app_trick_home');
    }
}
