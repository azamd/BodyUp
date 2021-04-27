<?php

namespace App\Form;

use App\Entity\Package;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PackageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class,['attr' => [
                'placeholder'=>"Package's name",
                'class' => 'form-control'
            ]
            ])

            ->add('image', FileType::class,['attr' => [
                'placeholder'=>"Package's image",
                'class' => 'form-control'
            ]
            ])
            ->add('detail', TextType::class,['attr' => [
                'placeholder'=>"details here..",
                'class' => 'form-control'
            ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Package::class,
        ]);
    }
}
