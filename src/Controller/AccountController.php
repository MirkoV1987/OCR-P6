<?php

namespace App\Controller;

use App\Form\Model\ChangePassword;
use App\Entity\User;
use App\Form\AccountType;
use App\Form\ForgotPasswordType;
use App\Form\ChangePasswordType;
use App\Form\Model\ResetPassword;
use App\Form\ResetPasswordType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AccountController extends AbstractController
{
    /**
     * Change password
     * @Route("user/update-password", name="app_user_password")
     */
    public function changePassword(Request $request, UserPasswordEncoderInterface $encoder, EntityManagerInterface $em)
    {
        $changePassword = new changePassword();
        $user = $this->getUser();
        
        $form = $this->createForm(ChangePasswordType::class, $changePassword);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $newPassword = $changePassword->getNewPassword();
            $password = $encoder->encodePassword($user, $newPassword);
            $user->setPassword($password);
            $em->persist($user);
            $em->flush();

            $this->addFlash(
                'success',
                'Votre mot de passe a été mis à jour.'
            );

            return $this->redirectToRoute('app_trick_home');
        }
        return $this->render(
            'User/user_password_update.html.twig',
            [
            'form' => $form->createView(),
        ]
        );
    }

    /**
     * Forgot password
     * @Route("user/forgot-password", name="app_account_forgot")
     */
    public function forgotPassword(Request $request, \Swift_Mailer $mailer, UserRepository $userRepo, EntityManagerInterface $em)
    {
        $form = $this->createForm(ForgotPasswordType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $username = $form->getData('username');
            $user = $userRepo->findOneByUsername($username);

            if ($user !== null) {
                $user->setValidationToken(md5(random_bytes(80)));

                $em->persist($user);
                $em->flush();

                //Call to SwiftMailer
                $message = (new \Swift_Message('SnowTricks - Password Reset'))
                ->setFrom('noreply@snowtricks.com')
                ->setTo($user->getEmail())
                ->setBody(
                    $this->renderView(
                        'User/emails/password_forgot.html.twig',
                        ['username' => $user->getUsername(),
                         'id' => $user->getId(),
                         'validationToken' => $user->getValidationToken(),
                        ]
                    ),
                    'text/html'
                );

                $mailer->send($message);

                $this->addFlash('success', 'Nous vous avons envoyé un mail pour réinitialiser votre mot de passe !');

                return $this->redirectToRoute('app_account_forgot');
            } else {
                $this->addFlash('danger', 'Cet utilisateur n\'existe pas.');

                return $this->redirectToRoute('app_account_forgot');
            }
        }
        return $this->render('User/user_password_forgot.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * Reset Password (forgot)
     * @Route("/user/reset-password/{username}/{validationToken}", name="app_account_reset")
     */
    public function resetPassword(Request $request, UserRepository $userRepo, EntityManagerInterface $em, UserPasswordEncoderInterface $encoder, $username, $validationToken)
    {
        $resetPassword = new ResetPassword();
        $user = $userRepo->findOneByUsername($username);
        
        $form = $this->createForm(ResetPasswordType::class, $resetPassword);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($user->getValidationToken() === $validationToken) {
            
            $newPassword = $resetPassword->getNewPassword();
            $password = $encoder->encodePassword($user, $newPassword);
            
            $user->setPassword($password);
            $em->persist($user);
            $em->flush();
                        
            $this->addFlash(
                'success',
                'Votre mot de passe a été mis à jour ! Connectez-vous !'
            );

                return $this->redirectToRoute('app_user_login');
            } else {
                $this->addFlash(
                    'danger',
                    "La modification du mot de passe a échoué ! Le lien de validation a expiré !"
                );
            }
        }
        return $this->render('User/user_password_reset.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
