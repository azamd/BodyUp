<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductRepository::class)
 */
class Product
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /*/**
     * @ORM\Column(type="integer")
     */
    #private $Id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $Name;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $CatProd;

    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     */
    private $Description;

    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     */
    private $Img;

    /**
     * @ORM\Column(type="float")
     */
    private $Price;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $Id): self
    {
        $this->Id = $Id;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getCatProd(): ?string
    {
        return $this->CatProd;
    }

    public function setCatProd(?string $CatProd): self
    {
        $this->CatProd = $CatProd;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(?string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getImg(): ?string
    {
        return $this->Img;
    }

    public function setImg(?string $Img): self
    {
        $this->Img = $Img;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->Price;
    }

    public function setPrice(float $Price): self
    {
        $this->Price = $Price;

        return $this;
    }
}
