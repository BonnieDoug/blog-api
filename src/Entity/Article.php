<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Class Article
 * @ApiResource()
 * @author Doug Hayward
 * @package App\Entity
 * @ORM\Entity()
 * @ORM\Table()
 */
class Article
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     * @var string
     */
    private $content;

    /**
     * @ORM\Column(name="created_at")
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @ORM\Column(name="updated_at")
     * @var \DateTime
     */
    private $updatedAt = null;

    /**
     * @ORM\Column(name="is_retired")
     * @var bool
     */
    private $isRetired = false;

    /**
     * @ORM\ManyToOne(targetEntity="Element")
     */
    private $element;


}