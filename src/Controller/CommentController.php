<?php

// src/Controller/CommentController.php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Comment;
use App\Repository\UserRepository;
use App\Repository\TrickRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManagerInterface;
use Twig\Environment;

class CommentController extends AbstractController
{
    /**
     * Get all comments posted by the User
     * @Route("comment/user/{id}", name="app_user_comments", requirements={"id" = "\d+"})
     */
    public function showCommentsByUser($id)
    {
        $user = $this->getDoctrine()
        ->getRepository(User::class)
        ->find($id);

        $comments = $user->getComments();

        return $this->render('User/user_comments.html.twig', [
            'comments' => $comments,
            'user' => $user
        ]);
    }

    /**
     * Comment delete
     * @Route("comment/delete/{id}", name="app_comment_delete", requirements={"id" = "\d+"})
     */
    public function commentDelete($id, Comment $comment, EntityManagerInterface $em)
    {
        $em = $this->getDoctrine()->getManager();
        $comment = $em->getRepository(Comment::class)->find($id);


        $em->remove($comment);
        $em->flush();

        $this->addflash(
            'success',
            "Le commentaire a été supprimé avec succès !"
        );

        return $this->redirectToRoute('app_trick_home');
    }
}
