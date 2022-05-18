<?php

namespace App\Entity;

use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\CommandeRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * @ORM\Entity(repositoryClass=CommandeRepository::class)
 */
class Commande
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $dateCommande;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresseLivraisonCommande;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cpLivraisonCommande;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $villeLivraisonCommande;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresseFactureCommande;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cpFactureCommande;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $villeFactureCommande;

    /**
     * @ORM\Column(type="date")
     */
    private $dateFacture;

    /**
     * @ORM\Column(type="decimal", precision=19, scale=4, nullable=true)
     */
    private $totalCommande;


    /**
     * @ORM\OneToMany(targetEntity=Livraison::class, mappedBy="idCommande")
     */
    private $livraisons;

    /**
     * @ORM\ManyToOne(targetEntity=Client::class, inversedBy="commandes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $client;

    /**
     * @ORM\OneToMany(targetEntity=DetailCommande::class, mappedBy="idCommande")
     */
    private $detailCommandes;

    public function __construct()
    {
        $this->livraisons = new ArrayCollection();
        $this->detailCommandes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(INT $id): self
    {
        $this->id = $id;

        return $this;
    } 

    public function getDateCommande(): ?\DateTime
    {
        return $this->dateCommande;
    }

    /**
     * @param \DateTime $dateCommande
     */

    public function setDateCommande(\DateTime $dateCommande): self
    {
        $this->dateCommande = $dateCommande;

        return $this;
    }

    public function getAdresseLivraisonCommande(): ?string
    {
        return $this->adresseLivraisonCommande;
    }

    public function setAdresseLivraisonCommande(string $adresseLivraisonCommande): self
    {
        $this->adresseLivraisonCommande = $adresseLivraisonCommande;

        return $this;
    }

    public function getCpLivraisonCommande(): ?string
    {
        return $this->cpLivraisonCommande;
    }

    public function setCpLivraisonCommande(string $cpLivraisonCommande): self
    {
        $this->cpLivraisonCommande = $cpLivraisonCommande;

        return $this;
    }

    public function getVilleLivraisonCommande(): ?string
    {
        return $this->villeLivraisonCommande;
    }

    public function setVilleLivraisonCommande(string $villeLivraisonCommande): self
    {
        $this->villeLivraisonCommande = $villeLivraisonCommande;

        return $this;
    }

    public function getAdresseFactureCommande(): ?string
    {
        return $this->adresseFactureCommande;
    }

    public function setAdresseFactureCommande(string $adresseFactureCommande): self
    {
        $this->adresseFactureCommande = $adresseFactureCommande;

        return $this;
    }

    public function getCpFactureCommande(): ?string
    {
        return $this->cpFactureCommande;
    }

    public function setCpFactureCommande(string $cpFactureCommande): self
    {
        $this->cpFactureCommande = $cpFactureCommande;

        return $this;
    }

    public function getVilleFactureCommande(): ?string
    {
        return $this->villeFactureCommande;
    }

    public function setVilleFactureCommande(string $villeFactureCommande): self
    {
        $this->villeFactureCommande = $villeFactureCommande;

        return $this;
    }

    public function getDateFacture(): ?\DateTime
    {
        return $this->dateFacture;
    }

    public function setDateFacture(\DateTime $dateFacture): self
    {
        $this->dateFacture = $dateFacture;

        return $this;
    }

    public function getTotalCommande(): ?string
    {
        return $this->totalCommande;
    }

    public function setTotalCommande(string $totalCommande): self
    {
        $this->totalCommande = $totalCommande;

        return $this;
    }

 

    /**
     * @return Collection<int, Livraison>
     */
    public function getLivraisons(): Collection
    {
        return $this->livraisons;
    }

    public function addLivraison(Livraison $livraison): self
    {
        if (!$this->livraisons->contains($livraison)) {
            $this->livraisons[] = $livraison;
            $livraison->setIdCommande($this);
        }

        return $this;
    }

    public function removeLivraison(Livraison $livraison): self
    {
        if ($this->livraisons->removeElement($livraison)) {
            // set the owning side to null (unless already changed)
            if ($livraison->getIdCommande() === $this) {
                $livraison->setIdCommande(null);
            }
        }

        return $this;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $idClient): self
    {
        $this->client = $idClient;

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
            $detailCommande->setIdCommande($this);
        }

        return $this;
    }

    public function removeDetailCommande(DetailCommande $detailCommande): self
    {
        if ($this->detailCommandes->removeElement($detailCommande)) {
            // set the owning side to null (unless already changed)
            if ($detailCommande->getIdCommande() === $this) {
                $detailCommande->setIdCommande(null);
            }
        }

        return $this;
    }
}
