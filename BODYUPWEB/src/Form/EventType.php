<?php

namespace App\Form;

use App\Entity\Event;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title',TextType::class,[
                'attr'=>[
                    'placeholder'=>'Enter Title',
                    'class'=>'form-control'
                ]
            ])
            ->add('image',FileType::class,array('data_class' => null))
            ->add('description',TextareaType::class)
            ->add('datestart',TextType::class,[
                'attr'=>[
                    'full_name'=> 'content',
                    'class'=>'form-control'
                ]
            ])
            ->add('dateend',TextType::class,[
                'attr'=>[
                    'class'=>'form-control'
                ]
            ])
            ->add('save',SubmitType::class,[
                'label'=>'Add',
                'attr'=>[
                    'class'=>'btn btn-primary'
                ]
            ])
        ->add('reset',SubmitType::class,[

        'label'=>'Reset',
        'attr'=>[
            'class'=>'btn btn-default'
        ]
    ])
    ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Event::class,
        ]);
    }
}
