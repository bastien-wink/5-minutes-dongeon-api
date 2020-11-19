<?php

namespace App\Controller;

use App\Entity\Account;
use App\Entity\AngelRelationship;
use App\Entity\Door;
use App\Service\DeviceService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Serializer\SerializerInterface;

class DoorNextController
{
    private $em;


    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function __invoke($data = null, Request $request)
    {
        /** @var Door[] $doors */
        $inactiveDoors = $this->em->getRepository(Door::class)->findBy(["current"=>false]);
        $allDoors = $this->em->getRepository(Door::class)->findAll();

        /** @var Door $selected */
        $selected = $inactiveDoors[array_rand($inactiveDoors)];

        foreach ($allDoors as $allDoor) {
            $allDoor->current = false;
        }

        $selected->current = true;

        $this->em->flush();

        return $selected;
    }
}
