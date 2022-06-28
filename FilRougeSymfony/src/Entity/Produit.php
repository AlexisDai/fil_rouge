<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProduitRepository::class)
 */
class Produit
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
    private $libelleCourt;

    /**
     * @ORM\Column(type="string", length=1500)
     */
    private $libelleLong;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $referenceFournisseur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $photo;

    /**
     * @ORM\Column(type="decimal", precision=19, scale=4)
     */
    private $prixAchat;

    /**
     * @ORM\Column(type="decimal", precision=19, scale=4)
     */
    private $prixHorsTaxe;

    /**
     * @ORM\ManyToOne(targetEntity=Rubrique::class, inversedBy="produits")
     * @ORM\JoinColumn(nullable=false)
     */
    private $rubrique;

    /**
     * @ORM\ManyToOne(targetEntity=Fournisseur::class, inversedBy="produits")
     * @ORM\JoinColumn(nullable=false)
     */
    private $fournisseur;

    /**
     * @ORM\OneToMany(targetEntity=DetailCommande::class, mappedBy="idProduit")
     */
    private $detailCommandes;

    /**
     * @ORM\OneToMany(targetEntity=LivraisonProduit::class, mappedBy="idProduit")
     */
    private $livraisonProduits;

    public function __construct()
    {
        $this->detailCommandes = new ArrayCollection();
        $this->livraisonProduits = new ArrayCollection();
    }

    public function setId(INT $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleCourt(): ?string
    {
        return $this->libelleCourt;
    }

    public function setLibelleCourt(string $libelleCourt): self
    {
        $this->libelleCourt = $libelleCourt;

        return $this;
    }

    public function getLibelleLong(): ?string
    {
        return $this->libelleLong;
    }

    public function setLibelleLong(string $libelleLong): self
    {
        $this->libelleLong = $libelleLong;

        return $this;
    }

    public function getReferenceFournisseur(): ?string
    {
        return $this->referenceFournisseur;
    }

    public function setReferenceFournisseur(string $referenceFournisseur): self
    {
        $this->referenceFournisseur = $referenceFournisseur;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photoProduit): self
    {
        $this->photo = $photoProduit;

        return $this;
    }

    public function getPrixAchat(): ?string
    {
        return $this->prixAchat;
    }

    public function setPrixAchat(string $prixAchat): self
    {
        $this->prixAchat = $prixAchat;

        return $this;
    }

    public function getPrixHorsTaxe(): ?string
    {
        return $this->prixHorsTaxe;
    }

    public function setPrixHorsTaxe(string $prixHorsTaxe): self
    {
        $this->prixHorsTaxe = $prixHorsTaxe;

        return $this;
    }

    public function getRubrique(): ?Rubrique
    {
        return $this->rubrique;
    }

    public function setRubrique(?Rubrique $idRubrique): self
    {
        $this->rubrique = $idRubrique;

        return $this;
    }

    public function getFournisseur(): ?Fournisseur
    {
        return $this->fournisseur;
    }

    public function setFournisseur(?Fournisseur $idFournisseur): self
    {
        $this->fournisseur = $idFournisseur;

        return $this;
    }


    /**
     * @return Collection<int, DetailCommande>
     */
    public function getDetailCommandes(): Collection
    {
        return $this->detailCommandes;
    }

    public function addDetailCommande(DetailCommande $detailCommande): self
    {
        if (!$this->detailCommandes->contains($detailCommande)) {
            $this->detailCommandes[] = $detailCommande;
            $detailCommande->setProduit($this);
        }

        return $this;
    }

    public function removeDetailCommande(DetailCommande $detailCommande): self
    {
        if ($this->detailCommandes->removeElement($detailCommande)) {
            // set the owning side to null (unless already changed)
            if ($detailCommande->getProduit() === $this) {
                $detailCommande->setProduit(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, LivraisonProduit>
     */
    public function getLivraisonProduits(): Collection
    {
        return $this->livraisonProduits;
    }

    public function addLivraisonProduit(LivraisonProduit $livraisonProduit): self
    {
        if (!$this->livraisonProduits->contains($livraisonProduit)) {
            $this->livraisonProduits[] = $livraisonProduit;
            $livraisonProduit->setProduit($this);
        }

        return $this;
    }

    public function removeLivraisonProduit(LivraisonProduit $livraisonProduit): self
    {
        if ($this->livraisonProduits->removeElement($livraisonProduit)) {
            // set the owning side to null (unless already changed)
            if ($livraisonProduit->getProduit() === $this) {
                $livraisonProduit->setProduit(null);
            }
        }

        return $this;
    }
}
