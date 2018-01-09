<?php

namespace App\Entity;

use App\Entity\Traits\Retireable;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Class Tag
 * @ApiResource
 * @author Doug Hayward
 * @package App\Entity
 * @ORM\Entity()
 * @ORM\Table()
 */
class Tag
{

    use Retireable;

    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @ORM\Column()
     * @var static
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="ElementTag", mappedBy="element")
     */
    private $elements;

    public function __construct()
    {
        $this->elements = new ArrayCollection();
    }

}