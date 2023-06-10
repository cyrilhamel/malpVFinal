<?php

namespace App\Controller\AdminMalp;

use App\Entity\Ateliers;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class AteliersCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Ateliers::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
