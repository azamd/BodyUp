<?php

namespace App\Form;

use App\Entity\Command;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommandType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('IdCmd')
            ->add('IdProd')
            ->add('IdClient')
            ->add('DesCmd')
            ->add('CmdDate')
            ->add('DlvrDate')
            ->add('TotalCmd')
            ->add('CmdStatus')
            ->add('DlvrStatus')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Command::class,
        ]);
    }
}
