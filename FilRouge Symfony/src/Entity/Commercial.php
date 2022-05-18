<?php

namespace App\Entity;

use App\Repository\CommercialRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommercialRepository::class)
 */
class Commercial
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenomCommercial;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresseCommercial;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cpCommercial;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $villeCommercial;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $emailCommercial;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telephoneCommercial;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id) : self
    {
        $this->id = $id;

        return $this;
    }

    public function getNomCommercial(): ?string
    {
        return $this->nomCommercial;
    }

    public function setNomCommercial(string $nomCommercial): self
    {
        $this->nomCommercial = $nomCommercial;

        return $this;
    }

    public function getPrenomCommercial(): ?string
    {
        return $this->prenomCommercial;
    }

    public function setPrenomCommercial(string $prenomCommercial): self
    {
        $this->prenomCommercial = $prenomCommercial;

        return $this;
    }

    public function getAdresseCommercial(): ?string
    {
        return $this->adresseCommercial;
    }

    public function setAdresseCommercial(string $adresseCommercial): self
    {
        $this->adresseCommercial = $adresseCommercial;

        return $this;
    }

    public function getCpCommercial(): ?string
    {
        return $this->cpCommercial;
    }

    public function setCpCommercial(string $cpCommercial): self
    {
        $this->cpCommercial = $cpCommercial;

        return $this;
    }

    public function getVilleCommercial(): ?string
    {
        return $this->villeCommercial;
    }

    public function setVilleCommercial(string $villeCommercial): self
    {
        $this->villeCommercial = $villeCommercial;

        return $this;
    }

    public function getEmailCommercial(): ?string
    {
        return $this->emailCommercial;
    }

    public function setEmailCommercial(string $emailCommercial): self
    {
        $this->emailCommercial = $emailCommercial;

        return $this;
    }

    public function getTelephoneCommercial(): ?string
    {
        return $this->telephoneCommercial;
    }

    public function setTelephoneCommercial(string $telephoneCommercial): self
    {
        $this->telephoneCommercial = $telephoneCommercial;

        return $this;
    }
}
