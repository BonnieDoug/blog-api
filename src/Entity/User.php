<?php

namespace App\Entity;

use App\Entity\Traits\Retireable;
use App\Entity\Traits\Timestampable;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Class User
 * @ApiResource
 * @author Doug Hayward
 * @package App\Entity
 * @ORM\Entity()
 * @ORM\Table()
 */
class User
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
     * @ORM\Column(type="string")
     * @var string
     */
    private $username;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    private $forename;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    private $surname;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    private $website;

    /**
     * @ORM\Column(type="text")
     * @var string
     */
    private $biography;

    /**
     * @ORM\OneToOne(targetEntity="Image")
     * @ORM\Column(nullable=true)
     */
    private $image = null;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     * @return User
     */
    public function setUsername(string $username): User
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @return string
     */
    public function getForename(): string
    {
        return $this->forename;
    }

    /**
     * @param string $forename
     * @return User
     */
    public function setForename(string $forename): User
    {
        $this->forename = $forename;
        return $this;
    }

    /**
     * @return string
     */
    public function getSurname(): string
    {
        return $this->surname;
    }

    /**
     * @param string $surname
     * @return User
     */
    public function setSurname(string $surname): User
    {
        $this->surname = $surname;
        return $this;
    }

    /**
     * @return string
     */
    public function getWebsite(): string
    {
        return $this->website;
    }

    /**
     * @param string $website
     * @return User
     */
    public function setWebsite(string $website): User
    {
        $this->website = $website;
        return $this;
    }

    /**
     * @return string
     */
    public function getBiography(): string
    {
        return $this->biography;
    }

    /**
     * @param string $biography
     * @return User
     */
    public function setBiography(string $biography): User
    {
        $this->biography = $biography;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     * @return User
     */
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }


}