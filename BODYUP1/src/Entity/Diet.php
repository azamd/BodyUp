<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups ;

/**
 * Diet
 *
 * @ORM\Table(name="diet", indexes={@ORM\Index(name="pkg_id", columns={"pkg_id"})})
 * @ORM\Entity
 * * @ORM\Entity(repositoryClass="App\Repository\DietRepository")
 */
class Diet
{
    /**
     * @var int
     *
     * @ORM\Column(name="dt_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $dtId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=20, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=500, nullable=false)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=800, nullable=false)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="calories", type="integer", nullable=false)
     */
    private $calories;

    /**
     * @var int
     *
     * @ORM\Column(name="carbs", type="integer", nullable=false)
     */
    private $carbs;

    /**
     * @var int
     *
     * @ORM\Column(name="fat", type="integer", nullable=false)
     */
    private $fat;

    /**
     * @var int
     *
     * @ORM\Column(name="protein", type="integer", nullable=false)
     */
    private $protein;
    /**
     * @var string
     *
     * @ORM\Column(name="BMI", type="string", length=30, nullable=false)
     */
    private $bmi;

    /**
     * @var int
     *
     * @ORM\Column(name="pkg_id", type="integer", nullable=false)
     * @Groups("posts:read")
     */
    private $pkgId;

    public function getDtId(): ?int
    {
        return $this->dtId;
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getCalories(): ?int
    {
        return $this->calories;
    }

    public function setCalories(int $calories): self
    {
        $this->calories = $calories;

        return $this;
    }
    public function getFat(): ?int
    {
        return $this->fat;
    }

    public function setFat(int $fat): self
    {
        $this->fat = $fat;

        return $this;
    }
    public function getCarbs(): ?int
    {
        return $this->carbs;
    }

    public function setCarbs(int $carbs): self
    {
        $this->carbs = $carbs;

        return $this;
    }
    public function getProtein(): ?int
    {
        return $this->protein;
    }

    public function setProtein(int $protein): self
    {
        $this->protein = $protein;

        return $this;
    }

    public function getBmi(): ?string
    {
        return $this->bmi;
    }

    public function setBmi(string $bmi): self
    {
        $this->bmi = $bmi;

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
