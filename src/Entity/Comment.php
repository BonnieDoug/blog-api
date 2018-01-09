<?php
namespace App\Entity;

use App\Entity\Traits\Retireable;
use App\Entity\Traits\Timestampable;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Class Comment
 * @ApiResource
 * @author Doug Hayward
 * @package App\Entity
 * @ORM\Entity()
 * @ORM\Table()
 */
class Comment
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
     * @ORM\Column()
     * @var string
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     * @var string
     */
    private $content;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     */
    private $createdBy;

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
     * @return Comment
     */
    public function setTitle(string $title): Comment
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
     * @return Comment
     */
    public function setContent(string $content): Comment
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * @param mixed $createdBy
     * @return Comment
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;
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
     * @return Comment
     */
    public function setElement($element)
    {
        $this->element = $element;
        return $this;
    }

}