<?php

namespace App\DataFixtures;

use App\Entity\Door;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class DoorFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $door = new Door();
        $door->name = "Steve";
        $door->imageUrl = "Steve";
        $door->symbols = ['🏹', '🏹', '🏹'];
        $manager->persist($door);

        $manager->flush();
    }
}
