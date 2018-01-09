<?php

namespace App\Entity;

use App\Entity\Traits\Retireable;
use App\Entity\Traits\Timestampable;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Class Element
 * @ApiResource
 * @author Doug Hayward
 * @package App\Entity
 * @ORM\Entity()
 * @ORM\Table()
 */
class Element
{

    use Retireable;
    use Timestampable;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="ElementTag", mappedBy="tag")
     */
    private $tags;

    public function __construct()
    {
        $this->tags = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param mixed $tags
     * @return Element
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
        return $this;
    }



}