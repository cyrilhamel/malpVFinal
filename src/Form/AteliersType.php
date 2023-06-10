<?php

namespace App\Form;

use App\Entity\Ateliers;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AteliersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomAtelier')
            ->add('descrAtelier')
            ->add('dateAtelier')
            ->add('dateFinAtelier')
            ->add('placesAtelier')
            ->add('prixAtelier')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Ateliers::class,
        ]);
    }
}
