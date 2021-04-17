<?php
/**
 * Created by HeximCZ
 * Date: 10/28/17 1:19 PM
 */

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;

class LoginForm extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('_username', EmailType::class)
            ->add('_password', PasswordType::class)
        ;
    }

    public function getBlockPrefix()
    {
        return 'form_login';
    }

}