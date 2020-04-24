<?php

// src/Form/ProfileType.php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProfileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder    
            ->add('username', TextType::class, [
                'label'=>'Utilisateur',
                'attr'=>[
                    'placeholder'=> 'Nom d\'utilisateur'
                ]
            ])
            ->add('email', EmailType::class, [
                'label'=>'Email',
                'attr'=>[
                    'placeholder'=> 'Insérez votre e-mail'
                ]
            ])
            // ->add('file', FileType::class, [
            //     'label' => 'Photo de profil',
            //     'attr' => [
            //         'placeholder' => 'Modifier votre photo de profil'
            //     ]
            // ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
