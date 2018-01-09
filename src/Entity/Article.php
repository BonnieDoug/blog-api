<?php
namespace App\Entity;

use App\Entity\Traits\Retireable;
use App\Entity\Traits\Timestampable;
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
    private $title;

    /**
     * @ORM\Column(type="text")
     * @var string
     */
    private $content;

    /**
     * @ORM\ManyToOne(targetEntity="Element")
     */
    private $element;

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
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Article
     */
    public function setTitle(string $title): Article
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return Article
     */
    public function setContent(string $content): Article
    {
        $this->content = $content;
        return $this;
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
     * @return Article
     */
    public function setElement($element)
    {
        $this->element = $element;
        return $this;
    }



}