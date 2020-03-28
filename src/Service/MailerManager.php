<?php
// src/Service/MailerManager.php

namespace App\Service;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class MailerManager extends AbstractController
{
    // /**
    //  * @Route("user/email", name="app_user_email")
    //  */
    public function sendEmail(MailerInterface $mailer)
    {
        $user = new User();

        $email = (new Email())
            ->from('noreply@snowtricks.com')
            ->to($user->getEmail())
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            //->priority(Email::PRIORITY_HIGH)
            ->subject('Validation de votre compte SnowTricks')
            ->text('Sending emails is fun again!')
            ->html('<p>See Twig integration for better HTML integration!</p>');

        $mailer->send($email);

        // ...
    }
}
