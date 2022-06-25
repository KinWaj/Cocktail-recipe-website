<?php

namespace App\Controller\Admin;

use App\Entity\Drink;
use Doctrine\ORM\Mapping\Builder\AssociationBuilder;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class DrinkCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Drink::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            TextField::new('type'),
            TextField::new('glass'),
            TextEditorField::new('instruction'),
            TextEditorField::new('ingredients'),
            TextField::new('image'),
        ];
    }

}
