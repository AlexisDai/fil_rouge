<?php

namespace App\Entity;

use App\Repository\ClientRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClientRepository::class)
 */
class Client
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
    private $categorieClient;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresseLivraisonClient;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cpLivraisonClient;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $villeLivraisonClient;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresseFactureClient;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cpFactureClient;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $villeFactureClient;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $modePaiementClient;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2, nullable=true)
     */
    private $reductionClient;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2)
     */
    private $coefficientClient;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $numeroSiretClient;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomClient;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenomClient;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nomEntrepriseClient;

    /**
     * @ORM\ManyToMany(targetEntity=Commercial::class)
     */
    private $commercial;

    public function __construct()
    {
        $this->commercial = new ArrayCollection();
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

    public function getCategorieClient(): ?string
    {
        return $this->categorieClient;
    }

    public function setCategorieClient(string $categorieClient): self
    {
        $this->categorieClient = $categorieClient;

        return $this;
    }

    public function getAdresseLivraisonClient(): ?string
    {
        return $this->adresseLivraisonClient;
    }

    public function setAdresseLivraisonClient(string $adresseLivraisonClient): self
    {
        $this->adresseLivraisonClient = $adresseLivraisonClient;

        return $this;
    }

    public function getCpLivraisonClient(): ?string
    {
        return $this->cpLivraisonClient;
    }

    public function setCpLivraisonClient(string $cpLivraisonClient): self
    {
        $this->cpLivraisonClient = $cpLivraisonClient;

        return $this;
    }

    public function getVilleLivraisonClient(): ?string
    {
        return $this->villeLivraisonClient;
    }

    public function setVilleLivraisonClient(string $villeLivraisonClient): self
    {
        $this->villeLivraisonClient = $villeLivraisonClient;

        return $this;
    }

    public function getAdresseFactureClient(): ?string
    {
        return $this->adresseFactureClient;
    }

    public function setAdresseFactureClient(string $adresseFactureClient): self
    {
        $this->adresseFactureClient = $adresseFactureClient;

        return $this;
    }

    public function getCpFactureClient(): ?string
    {
        return $this->cpFactureClient;
    }

    public function setCpFactureClient(string $cpFactureClient): self
    {
        $this->cpFactureClient = $cpFactureClient;

        return $this;
    }

    public function getVilleFactureClient(): ?string
    {
        return $this->villeFactureClient;
    }

    public function setVilleFactureClient(string $villeFactureClient): self
    {
        $this->villeFactureClient = $villeFactureClient;

        return $this;
    }

    public function getModePaiementClient(): ?string
    {
        return $this->modePaiementClient;
    }

    public function setModePaiementClient(string $modePaiementClient): self
    {
        $this->modePaiementClient = $modePaiementClient;

        return $this;
    }

    public function getReductionClient(): ?string
    {
        return $this->reductionClient;
    }

    public function setReductionClient(string $reductionClient): self
    {
        $this->reductionClient = $reductionClient;

        return $this;
    }

    public function getCoefficientClient(): ?string
    {
        return $this->coefficientClient;
    }

    public function setCoefficientClient(string $coefficientClient): self
    {
        $this->coefficientClient = $coefficientClient;

        return $this;
    }

    public function getNumeroSiretClient(): ?string
    {
        return $this->numeroSiretClient;
    }

    public function setNumeroSiretClient(?string $numeroSiretClient): self
    {
        $this->numeroSiretClient = $numeroSiretClient;

        return $this;
    }

    public function getNomClient(): ?string
    {
        return $this->nomClient;
    }

    public function setNomClient(string $nomClient): self
    {
        $this->nomClient = $nomClient;

        return $this;
    }

    public function getPrenomClient(): ?string
    {
        return $this->prenomClient;
    }

    public function setPrenomClient(string $prenomClient): self
    {
        $this->prenomClient = $prenomClient;

        return $this;
    }

    public function getNomEntrepriseClient(): ?string
    {
        return $this->nomEntrepriseClient;
    }

    public function setNomEntrepriseClient(?string $nomEntrepriseClient): self
    {
        $this->nomEntrepriseClient = $nomEntrepriseClient;

        return $this;
    }

    /**
     * @return Collection<int, Commercial>
     */
    public function getCommercial(): Collection
    {
        return $this->commercial;
    }

    public function addCommercial(Commercial $idCommercial): self
    {
        if (!$this->commercial->contains($idCommercial)) {
            $this->commercial[] = $idCommercial;
        }

        return $this;
    }

    public function removeCommercial(Commercial $idCommercial): self
    {
        $this->commercial->removeElement($idCommercial);

        return $this;
    }
}
