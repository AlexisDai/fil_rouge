<?php

namespace App\Entity;

use App\Repository\FournisseurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FournisseurRepository::class)
 */
class Fournisseur
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
    private $nomFournisseur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresseFournisseur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cpFournisseur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $villeFournisseur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $emailFournisseur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telephoneFournisseur;

    /**
     * @ORM\OneToMany(targetEntity=Produit::class, mappedBy="idFournisseur")
     */
    private $produits;

    public function __construct()
    {
        $this->produits = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomFournisseur(): ?string
    {
        return $this->nomFournisseur;
    }

    public function setNomFournisseur(string $nomFournisseur): self
    {
        $this->nomFournisseur = $nomFournisseur;

        return $this;
    }

    public function getAdresseFournisseur(): ?string
    {
        return $this->adresseFournisseur;
    }

    public function setAdresseFournisseur(string $adresseFournisseur): self
    {
        $this->adresseFournisseur = $adresseFournisseur;

        return $this;
    }

    public function getCpFournisseur(): ?string
    {
        return $this->cpFournisseur;
    }

    public function setCpFournisseur(string $cpFournisseur): self
    {
        $this->cpFournisseur = $cpFournisseur;

        return $this;
    }

    public function getVilleFournisseur(): ?string
    {
        return $this->villeFournisseur;
    }

    public function setVilleFournisseur(string $villeFournisseur): self
    {
        $this->villeFournisseur = $villeFournisseur;

        return $this;
    }

    public function getEmailFournisseur(): ?string
    {
        return $this->emailFournisseur;
    }

    public function setEmailFournisseur(string $emailFournisseur): self
    {
        $this->emailFournisseur = $emailFournisseur;

        return $this;
    }

    public function getTelephoneFournisseur(): ?string
    {
        return $this->telephoneFournisseur;
    }

    public function setTelephoneFournisseur(string $telephoneFournisseur): self
    {
        $this->telephoneFournisseur = $telephoneFournisseur;

        return $this;
    }

    /**
     * @return Collection<int, Produit>
     */
    public function getProduits(): Collection
    {
        return $this->produits;
    }

    public function addProduit(Produit $produit): self
    {
        if (!$this->produits->contains($produit)) {
            $this->produits[] = $produit;
            $produit->setIdFournisseur($this);
        }

        return $this;
    }

    public function removeProduit(Produit $produit): self
    {
        if ($this->produits->removeElement($produit)) {
            // set the owning side to null (unless already changed)
            if ($produit->getIdFournisseur() === $this) {
                $produit->setIdFournisseur(null);
            }
        }

        return $this;
    }
}
