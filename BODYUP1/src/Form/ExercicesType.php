<?php

namespace App\Form;

use App\Entity\Categories;
use App\Entity\Exercices;
use App\Repository\CategoriesRepository;
use App\Repository\PackageRepository;
use phpDocumentor\Reflection\File;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ExercicesType extends AbstractType
{
    private $userRepository;
    private $pkgRepository;
    public  function __construct(CategoriesRepository $userRepository,PackageRepository $pkgRepository)
    {
        $this->userRepository = $userRepository;
        $this->pkgRepository = $pkgRepository;
    }



    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class,['attr' => [
                'placeholder'=>"Workout's name",
                'class' => 'form-control'
            ]
            ])

            ->add('image', FileType::class,['attr' => [
                'placeholder'=>"Workout's image",
                'class' => 'form-control'
            ]
            ])
            ->add('video', TextType::class,['attr' => [
                'placeholder'=>"Workout's video",
                'class' => 'form-control'
            ]
            ])
            ->add('label', TextType::class,['attr' => [
                'placeholder'=>"Workout's requirements",
                'class' => 'form-control'
            ]
            ])
            ->add('duration', TextType::class,['attr' => [
                'placeholder'=>"Workout's duration",
                'class' => 'form-control'
            ]
            ])
            ->add('level', TextType::class,['attr' => [
                'placeholder'=>"Workout's level",
                'class' => 'form-control'
            ]
            ])
            ->add('price', TextType::class,['attr' => [
                'placeholder'=>"price here..",
                'class' => 'form-control'
            ]
            ])
            ->add('rate', TextType::class,['attr' => [
                'placeholder'=>"rate here..",
                'class' => 'form-control'
            ]
            ])
            ->add('catId', ChoiceType::class, [

                'multiple' => false,
                'choices' =>

                    $this->userRepository->createQueryBuilder('u')->select("(u.catId) as id")->getQuery()->getResult(),
                'choice_label' => function ($choice) {
                    return $choice;
                },
            ])
        ->add('pkgId', ChoiceType::class, [

        'multiple' => false,
        'choices' =>

            $this->pkgRepository->createQueryBuilder('u')->select("(u.pkgId) as id")->getQuery()->getResult(),
        'choice_label' => function ($choice) {
            return $choice;
        },
    ]);

    }



    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Exercices::class,
        ]);
    }
}
