<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\Types\Integer;
use Symfony\Component\Serializer\Annotation\Groups ;

/**
 * Exercices
 *
 * @ORM\Table(name="exercices", indexes={@ORM\Index(name="test1", columns={"pkg_id"}), @ORM\Index(name="catt", columns={"cat_id"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\ExercicesRepository")
 */
class Exercices
{
    /**
     * @var int
     *
     * @ORM\Column(name="ex_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $exId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=30, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=1000, nullable=false)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="video", type="string", length=1000, nullable=false)
     */
    private $video;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=30, nullable=false)
     */
    private $label;

    /**
     * @var int
     *
     * @ORM\Column(name="duration", type="integer", nullable=false)
     */
    private $duration;

    /**
     * @var string
     *
     * @ORM\Column(name="level", type="string", length=20, nullable=false)
     */
    private $level;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float", precision=10, scale=0, nullable=false)
     */
    private $price;

    /**
     * @var float
     *
     * @ORM\Column(name="rate", type="float", precision=10, scale=0, nullable=false)
     */
    private $rate;


    /**
     * @var int
     *
     * @ORM\Column(name="cat_id", type="integer", nullable=false)
     * @Groups("posts:read")
     */
    private $catId;

    /**
     * @var int
     *
     * @ORM\Column(name="pkg_id", type="integer", nullable=false)
     * @Groups("posts:read")
     */
    private $pkgId;

    public function getExId(): ?int
    {
        return $this->exId;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getVideo(): ?string
    {
        return $this->video;
    }

    public function setVideo(string $video): self
    {
        $this->video = $video;

        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getDuration(): ?int
    {
        return $this->duration;
    }

    public function setDuration(int $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    public function getLevel(): ?string
    {
        return $this->level;
    }

    public function setLevel(string $level): self
    {
        $this->level = $level;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getRate(): ?float
    {
        return $this->rate;
    }

    public function setRate(float $rate): self
    {
        $this->rate = $rate;

        return $this;
    }

    public function getCatId(): ?int
    {
        return $this->catId;
    }

    public function setCatId(?int $catId): self
    {
        $this->catId = $catId;

        return $this;
    }

    public function getPkgId(): ?int
    {
        return $this->pkgId;
    }

    public function setPkgId(?int $pkgId): self
    {
        $this->pkgId = $pkgId;

        return $this;
    }


}
