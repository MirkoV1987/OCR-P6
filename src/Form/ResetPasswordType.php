<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ResetPasswordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Password', PasswordType::class, array(
                'label' => 'Nouveau mot de passe',
                'attr' => [
                    'placeholder' => 'Votre nouveau mot de passe',
                ],
            ))
            ->add('confirmPassword', PasswordType::class, array(
                'label' => 'Confirmation de mot de passe',
                'attr' => [
                    'placeholder' => 'Veuillez confirmer votre mot de passe',
                ],
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
