<?php

// src/Service/Mailer

namespace App\Service;

use App\Entity\User;
use Symfony\Component\ErrorHandler\ErrorHandler;

class Mailer
{
    public function sendEmail($username, \Swift_Mailer $mailer)
    {
        $user = new User();

        $message = (new \Swift_Message('Validation de votre compte sur SnowTricks'))
            ->setFrom('send@example.com')
            ->setTo($user->getEmail())
            ->setBody(
                $this->renderView('emails/validation.html.twig', [
                        'username' => $username
                    ]),
                    'text/html'
                )
            ;

        $mailer->send($message);
    }
}