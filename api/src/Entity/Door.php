<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Controller\DoorNextController;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;

/**
 * This is a dummy entity. Remove it!
 *
 * @ORM\Entity
 * @ApiResource(
 *     formats={"json"},
 *  itemOperations={
 *      "get",
 *  },
 *  collectionOperations={
 *      "get",
 *      "next"={
 *           "method"="GET",
 *           "path"="/doors/next",
 *           "controller"=DoorNextController::class
 *     }
 *   }
 * )
 * @ApiFilter(SearchFilter::class, properties={"current": "exact"})
 */
class Door
{
    /**
     * @var int The entity Id
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string A nice person
     *
     * @ORM\Column
     * @Assert\NotBlank
     */
    public $name = '';

    /**
     * @ORM\Column(nullable=true)
     */
    public $imageUrl = '';

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    public $symbols = [];

    /**
     * @ORM\Column(type="boolean", options={"default"="0"})
     */
    public $currentlyPlayed = false;

    public function getId(): int
    {
        return $this->id;
    }
}
