<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ApiResource(
 *  formats={"json"},
 *  itemOperations={
 *      "get",
 *  },
 *  collectionOperations={
 *      "get"
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
     * @Groups({"game:output"})
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
     * @Groups({"game:output"})
     */
    public $imageUrl = '';

    /**
     * @ORM\Column(type="array", nullable=true)
     * @Groups({"game:output"})
     */
    public $symbols = [];

    public function getId(): int
    {
        return $this->id;
    }
}
