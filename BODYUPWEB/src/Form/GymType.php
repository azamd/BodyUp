<?php

namespace App\Form;

use App\Entity\Gym;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class GymType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',TextType::class,[
                'attr'=>[
                    'placeholder'=>'Enter Gym Name',
                    'class'=>'form-control'
                ]
            ])
            ->add('Duration',TextType::class,[
                'attr'=>[
                    'placeholder'=>'Enter Duration',
                    'class'=>'form-control'
                ]
            ])
            ->add('Price',TextType::class,[
                'attr'=>[
                    'placeholder'=>'Enter Price',
                    'class'=>'form-control'
                ]
            ])
            ->add('image',FileType::class,array('data_class' => null))
            ->add('description',TextareaType::class)
            ->add('save',SubmitType::class,[
                'label'=>'Add',
                'attr'=>[
                    'class'=>'btn btn-primary'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Gym::class,
        ]);
    }
}
