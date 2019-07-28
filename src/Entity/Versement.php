<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\VersementRepository")
 */
class Versement
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Type;

    /**
     * @ORM\Column(type="integer")
     */
    private $Solde;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Partenaire", inversedBy="MontantVerse")
     */
    private $partenaire;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Caissier", inversedBy="Montantverse")
     * @ORM\JoinColumn(nullable=false)
     */
    private $caissier;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->Type;
    }

    public function setType(string $Type): self
    {
        $this->Type = $Type;

        return $this;
    }

    public function getSolde(): ?int
    {
        return $this->Solde;
    }

    public function setSolde(int $Solde): self
    {
        $this->Solde = $Solde;

        return $this;
    }

    public function getPartenaire(): ?Partenaire
    {
        return $this->partenaire;
    }

    public function setPartenaire(?Partenaire $partenaire): self
    {
        $this->partenaire = $partenaire;

        return $this;
    }

    public function getCaissier(): ?Caissier
    {
        return $this->caissier;
    }

    public function setCaissier(?Caissier $caissier): self
    {
        $this->caissier = $caissier;

        return $this;
    }
}
