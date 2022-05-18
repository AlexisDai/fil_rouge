<?php

namespace App\Entity;

use App\Repository\LivraisonProduitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LivraisonProduitRepository::class)
 */
class LivraisonProduit
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
    private $quantiteProduitLivre;

    /**
     * @ORM\ManyToOne(targetEntity=Produit::class, inversedBy="livraisonProduits")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idProduit;

    /**
     * @ORM\ManyToOne(targetEntity=Livraison::class, inversedBy="livraisonProduits")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idLivraison;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantiteProduitLivre(): ?int
    {
        return $this->quantiteProduitLivre;
    }

    public function setQuantiteProduitLivre(int $quantiteProduitLivre): self
    {
        $this->quantiteProduitLivre = $quantiteProduitLivre;

        return $this;
    }

    public function getIdProduit(): ?Produit
    {
        return $this->idProduit;
    }

    public function setIdProduit(?Produit $idProduit): self
    {
        $this->idProduit = $idProduit;

        return $this;
    }

    public function getIdLivraison(): ?Livraison
    {
        return $this->idLivraison;
    }

    public function setIdLivraison(?Livraison $idLivraison): self
    {
        $this->idLivraison = $idLivraison;

        return $this;
    }
}
