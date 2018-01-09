<?php

namespace App\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait Retireable
 * @author Doug Hayward
 * @package App\Entity\Traits
 */
trait Retireable
{
    /**
     * @ORM\Column(name="is_retired", type="boolean")
     * @var boolean
     */
    private $isRetired = false;

    /**
     * @return bool
     */
    public function isRetired(): bool
    {
        return $this->isRetired;
    }

    /**
     * @param bool $isRetired
     * @return Retireable
     */
    public function setIsRetired(bool $isRetired)
    {
        $this->isRetired = $isRetired;
        return $this;
    }


}