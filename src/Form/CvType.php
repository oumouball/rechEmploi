<?php

namespace App\Form;
use \Symfony\Component\Form\Extension\Core\Type\TextType;
use App\Entity\Cv;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CvType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',TextType::class,
            [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Nom',
                ]
            ])
            ->add('prenom',TextType::class,
           [ 'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Prenom',
                ]
                ] )

            ->add('age',TextType::class,
            [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Age',
                ]
            ] )
           
            ->add('adresse',TextType::class,
            [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Adresse',
                ]
            ] )
            
            
            ->add('email',TextType::class,
            [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Email',
                ]
            ] )
            
           
            ->add('telephone',TextType::class,
            [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Telephone',
                ]
            ] )
            
            ->add('specialite',TextType::class,
            [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Specialite',
                ]
            ] )
            ->add('niveauEtude'
            ,TextType::class,
            [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'NiveauEtude',
                ]
            ] )
            ->add('experienceprofessionnelle'
            ,TextType::class,
            [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'ExperienceProffesionnelle',
                ]
            ] )
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Cv::class,
        ]);
    }
}
