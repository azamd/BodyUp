<?php

namespace App\Entity;

use App\Repository\CommandRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommandRepository::class)
 */
class Command
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
    private $IdCmd;

    /**
     * @ORM\Column(type="integer")
     */
    private $IdProd;

    /**
     * @ORM\Column(type="integer")
     */
    private $IdClient;

    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     */
    private $DesCmd;

    /**
     * @ORM\Column(type="date")
     */
    private $CmdDate;

    /**
     * @ORM\Column(type="date")
     */
    private $DlvrDate;

    /**
     * @ORM\Column(type="float")
     */
    private $TotalCmd;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $CmdStatus;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $DlvrStatus;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdCmd(): ?int
    {
        return $this->IdCmd;
    }

    public function setIdCmd(int $IdCmd): self
    {
        $this->IdCmd = $IdCmd;

        return $this;
    }

    public function getIdProd(): ?int
    {
        return $this->IdProd;
    }

    public function setIdProd(int $IdProd): self
    {
        $this->IdProd = $IdProd;

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

    public function getDesCmd(): ?string
    {
        return $this->DesCmd;
    }

    public function setDesCmd(?string $DesCmd): self
    {
        $this->DesCmd = $DesCmd;

        return $this;
    }

    public function getCmdDate(): ?\DateTimeInterface
    {
        return $this->CmdDate;
    }

    public function setCmdDate(\DateTimeInterface $CmdDate): self
    {
        $this->CmdDate = $CmdDate;

        return $this;
    }

    public function getDlvrDate(): ?\DateTimeInterface
    {
        return $this->DlvrDate;
    }

    public function setDlvrDate(\DateTimeInterface $DlvrDate): self
    {
        $this->DlvrDate = $DlvrDate;

        return $this;
    }

    public function getTotalCmd(): ?float
    {
        return $this->TotalCmd;
    }

    public function setTotalCmd(float $TotalCmd): self
    {
        $this->TotalCmd = $TotalCmd;

        return $this;
    }

    public function getCmdStatus(): ?string
    {
        return $this->CmdStatus;
    }

    public function setCmdStatus(?string $CmdStatus): self
    {
        $this->CmdStatus = $CmdStatus;

        return $this;
    }

    public function getDlvrStatus(): ?string
    {
        return $this->DlvrStatus;
    }

    public function setDlvrStatus(?string $DlvrStatus): self
    {
        $this->DlvrStatus = $DlvrStatus;

        return $this;
    }
}
