<?php

namespace App\Form;

use App\Entity\Ateliers;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;

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
            ->add('imageFile', VichImageType::class, [
                'required' => false,
                'allow_delete' => true,
                'delete_label' => '...',
                'download_label' => '...',
                'download_uri' => true,
                'image_uri' => true,
                'imagine_pattern' => '...',
                'asset_helper' => true,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Ateliers::class,
        ]);
    }
}
