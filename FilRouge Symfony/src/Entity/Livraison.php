<?php

namespace App\Entity;

use App\Repository\LivraisonRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LivraisonRepository::class)
 */
class Livraison
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
    private $adresseLivraison;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cpLivraison;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $villeLivraison;

    /**
     * @ORM\Column(type="date")
     */
    private $dateLivraison;

    /**
     * @ORM\ManyToOne(targetEntity=Commande::class, inversedBy="livraisons")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idCommande;

    /**
     * @ORM\OneToMany(targetEntity=LivraisonProduit::class, mappedBy="idLivraison")
     */
    private $livraisonProduits;

    public function __construct()
    {
        $this->livraisonProduits = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAdresseLivraison(): ?string
    {
        return $this->adresseLivraison;
    }

    public function setAdresseLivraison(string $adresseLivraison): self
    {
        $this->adresseLivraison = $adresseLivraison;

        return $this;
    }

    public function getCpLivraison(): ?string
    {
        return $this->cpLivraison;
    }

    public function setCpLivraison(string $cpLivraison): self
    {
        $this->cpLivraison = $cpLivraison;

        return $this;
    }

    public function getVilleLivraison(): ?string
    {
        return $this->villeLivraison;
    }

    public function setVilleLivraison(string $villeLivraison): self
    {
        $this->villeLivraison = $villeLivraison;

        return $this;
    }

    public function getDateLivraison(): ?\DateTimeInterface
    {
        return $this->dateLivraison;
    }

    public function setDateLivraison(\DateTimeInterface $dateLivraison): self
    {
        $this->dateLivraison = $dateLivraison;

        return $this;
    }

    public function getIdCommande(): ?Commande
    {
        return $this->idCommande;
    }

    public function setIdCommande(?Commande $idCommande): self
    {
        $this->idCommande = $idCommande;

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
            $livraisonProduit->setIdLivraison($this);
        }

        return $this;
    }

    public function removeLivraisonProduit(LivraisonProduit $livraisonProduit): self
    {
        if ($this->livraisonProduits->removeElement($livraisonProduit)) {
            // set the owning side to null (unless already changed)
            if ($livraisonProduit->getIdLivraison() === $this) {
                $livraisonProduit->setIdLivraison(null);
            }
        }

        return $this;
    }
}
