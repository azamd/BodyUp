<?php

namespace App\Entity;

use App\Repository\CartRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CartRepository::class)
 */
class Cart
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $IdCart;

    /**
     * @ORM\Column(type="integer")
     */
    private $IdClient;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Quantity;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Total;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdCart(): ?int
    {
        return $this->IdCart;
    }

    public function setIdCart(int $IdCart): self
    {
        $this->IdCart = $IdCart;

        return $this;
    }

    public function getIdClient(): ?int
    {
        return $this->IdClient;
    }

    public function setIdClient(int $IdClient): self
    {
        $this->IdClient = $IdClient;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->Quantity;
    }

    public function setQuantity(?int $Quantity): self
    {
        $this->Quantity = $Quantity;

        return $this;
    }

    public function getTotal(): ?int
    {
        return $this->Total;
    }

    public function setTotal(?int $Total): self
    {
        $this->Total = $Total;

        return $this;
    }
}
