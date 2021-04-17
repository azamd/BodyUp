<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

class EmailForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, [
                    'constraints' => [
                        new Assert\Email(['checkMX' => true , 'message' => 'email.bad_format'] ),
                        new Assert\NotBlank( ['message' => 'email.not_blank'] )
                ]
            ]);
    }

    public function getBlockPrefix()
    {
        return 'form_email';
    }
}
