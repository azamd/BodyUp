<?php

namespace App\Form;

use App\Entity\Diet;
use App\Repository\PackageRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DietType extends AbstractType
{


    public  function __construct(PackageRepository $pkRepository)
    {

        $this->pkRepository = $pkRepository;
    }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class,['attr' => [
                'placeholder'=>"Diet's name",
                'class' => 'form-control'
            ]
            ])

            ->add('image', FileType::class,['attr' => [
                'placeholder'=>"Diet's image",
                'class' => 'form-control'
            ]
            ])
            ->add('description', TextType::class,['attr' => [
                'placeholder'=>"description here..",
                'class' => 'form-control'
            ]
            ])
            ->add('calories', TextType::class,['attr' => [
                'placeholder'=>"Diet's calories",
                'class' => 'form-control'
            ]
            ])
            ->add('fat', TextType::class,['attr' => [
                'placeholder'=>"fat here..",
                'class' => 'form-control'
            ]
            ])
            ->add('carbs', TextType::class,['attr' => [
                'placeholder'=>"carbs here..",
                'class' => 'form-control'
            ]
            ])
            ->add('protein', TextType::class,['attr' => [
                'placeholder'=>"protein here..",
                'class' => 'form-control'
            ]
            ])
            ->add('bmi', TextType::class,['attr' => [
                'placeholder'=>"bmi here..",
                'class' => 'form-control'
            ]
            ])
            ->add('pkgId', ChoiceType::class, [

                'multiple' => false,
                'choices' =>

                    $this->pkRepository->createQueryBuilder('u')->select("(u.pkgId) as id")->getQuery()->getResult(),
                'choice_label' => function ($choice) {
                    return $choice;
                },
            ]);

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Diet::class,
        ]);
    }
}
