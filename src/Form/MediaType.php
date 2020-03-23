<?php

// src/Form/MediaType.php

namespace App\Form;

use App\Entity\Media;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MediaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('name', FileType::class, [
            'label' => false,
            //'mapped'=> true,
            'row_attr' => ['class' => 'add-image'],
            'attr' => [
                'placeholder' => 'Charger une image',
            ],
            'required'=> true,
            //'multiple'=> true,
            // 'constraints' => [
            //     new Media([
            //         'maxSize' => '4M',
            //         'mimeTypes' => [
            //             'application/jpeg',
            //             'application/jpg',
            //             'application/png',
            //         ],
            //         'mimeTypesMessage' => 'Charger un format valide',
            //     ])
            // ],
            ])
            // ->add('name', TextType::class, [
            //         'label' => false,
            //         'required'=> false,
            //         'attr' => [
            //             'placeholder' => 'Titre de l\'image',
            //         ],
            // ])
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
            'data_class' => Media::class
        ]);
    }
}
