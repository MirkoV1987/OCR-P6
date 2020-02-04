<?php

// src/Form/TrickType.php

namespace App\Form;

use App\Entity\Trick;
use App\Entity\Category;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TrickType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label'=>'Nom du Trick',
                'attr'=>[
                    'maxlength'=>40,
                    'minlenght'=>3,
                    'max-width'=> '60px'
                ]
            ])
            ->add('description', TextareaType::class, [
                'label'=>'Description',
                'attr'=>[
                    'rows'=>10
                ]
            ])
            ->add('date_add', DateType::class, [
                'label'=>'Date de création'
            ])
            ->add('category', EntityType::class, [
                'label'=>'Groupe',
                'class'=>Category::class,
                'choice_label'=> 'name'
            ])
            ->add('save', SubmitType::class, [
                'label'=>'Ajouter'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Trick::class,
        ]);
    }
}
