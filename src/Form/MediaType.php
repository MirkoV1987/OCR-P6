<?php

// src/Form/MediaType.php

namespace App\Form;

use App\Entity\Media;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MediaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', FileType::class, [
                    'label' => false,
                    'row_attr' => ['class' => 'add-image'],
                    'attr' => [
                        'placeholder' => 'Charger une image',
                    ],
                    'required'=> true 
            ])
            ->add('caption', TextType::class, [
                'label' => false,
                'attr' => [
                    'placeholder' => 'Insérer une description',
                    'maxlength'=>40,
                    'minlenght'=>3
                ],
                'required'=> true 
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Media::class,
        ]);
    }
}
