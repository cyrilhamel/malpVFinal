<?php

namespace App\Controller\AdminMalp;

use App\Entity\Produits;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use Vich\UploaderBundle\Form\Type\VichImageType;

class ProduitsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Produits::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('nomProduit'),
            TextField::new('descrProduit'),
            IntegerField::new('prixProduit'),
            TextField::new('imageFile', 'Upload')
                ->setFormType(VichImageType::class)
                ->onlyOnForms(),
            ImageField::new('imageName', 'Images')
                ->setBasePath('/images')
                ->hideOnForm()
        ];
    }
}
