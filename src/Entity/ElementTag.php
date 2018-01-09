<?php

namespace App\Entity;

use App\Entity\Traits\Retireable;
use App\Entity\Traits\Timestampable;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Class ElementTag
 * @ApiResource
 * @author Doug Hayward
 * @package App\Entity
 * @ORM\Entity()
 * @ORM\Table()
 */
class ElementTag
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
     * @ORM\ManyToOne(targetEntity="Element")
     */
    private $element;

    /**
     * @ORM\ManyToOne(targetEntity="Tag")
     */
    private $tag;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     */
    private $user;

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
    public function getElement()
    {
        return $this->element;
    }

    /**
     * @param mixed $element
     * @return ElementTag
     */
    public function setElement($element)
    {
        $this->element = $element;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * @param mixed $tag
     * @return ElementTag
     */
    public function setTag($tag)
    {
        $this->tag = $tag;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     * @return ElementTag
     */
    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }

}