<?php

namespace App\Controller\Admin;

use App\Entity\Door;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;

class DoorCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Door::class;
    }

    public function configureFields(string $pageName): iterable
    {
        yield IntegerField::new('id')->onlyOnIndex();

        yield 'name';
        yield BooleanField::new('currentlyPlayed');
        yield 'imageUrl';
        yield ArrayField::new('symbols');
    }
}
