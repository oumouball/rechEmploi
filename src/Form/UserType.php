<?php

namespace App\Form;
use \Symfony\Component\Form\Extension\Core\Type\TextType;
use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email',TextType::class,
            [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Email',
                ]
            ])
            
            ->add('password'
            ,TextType::class,
            [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Password',
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
