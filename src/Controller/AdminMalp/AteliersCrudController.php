<?php

namespace App\Controller\AdminMalp;

use App\Entity\Ateliers;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use Vich\UploaderBundle\Form\Type\VichImageType;

class AteliersCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Ateliers::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('nomAtelier'),
            TextField::new('descrAtelier'),
            DateField::new('dateAtelier'),
            DateField::new('dateFinAtelier'),
            IntegerField::new('placesAtelier'),
            IntegerField::new('prixAtelier'),
            TextField::new('imageFile', 'Upload')
                ->setFormType(VichImageType::class)
                ->onlyOnForms(),
            ImageField::new('imageName', 'Images')
                ->setBasePath('/images')
                ->hideOnForm()
        ];
    }
    
}
