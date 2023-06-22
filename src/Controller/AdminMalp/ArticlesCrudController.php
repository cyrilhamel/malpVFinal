<?php

namespace App\Controller\AdminMalp;

use App\Entity\Articles;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Vich\UploaderBundle\Form\Type\VichImageType;
class ArticlesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Articles::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('nomArticle'),
            TextField::new('texteArticle'),
            TextField::new('imageFile', 'Upload')
                ->setFormType(VichImageType::class)
                ->onlyOnForms(),
            ImageField::new('imageName', 'Images')
                ->setBasePath('/images')
                ->hideOnForm()
        ];
    }
    
}
