<?php

namespace App\Form;

use App\Entity\Advertisements;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class AdvertisementsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'title',
                TextType::class,
                [
                    'label' => 'Title',
                    'constraints' => [
                        new NotBlank(['message' => 'Trūksta pavadinimo.'])
                    ]
                ]
                )
            ->add(
                'description',
                TextareaType::class,
                ['label' => 'Description',
                    'required' => false]
            )
            ->add(
                'save',
                SubmitType::class,
                ['label' => 'SAVE']
            );
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
            'data_class' => Advertisements::class,
            'attr' => [
                'novalidate' => true,
            ]
        ]);
    }
}
