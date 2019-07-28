<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\AdminSystemeRepository")
 */
class AdminSysteme
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
    private $NomComplet;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Motdepasse;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Partenaire", mappedBy="adminSysteme")
     */
    private $créerPartenaire;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Caissier", mappedBy="adminSysteme")
     */
    private $CreerCaissier;

    public function __construct()
    {
        $this->créerPartenaire = new ArrayCollection();
        $this->CreerCaissier = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomComplet(): ?string
    {
        return $this->NomComplet;
    }

    public function setNomComplet(string $NomComplet): self
    {
        $this->NomComplet = $NomComplet;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function getMotdepasse(): ?string
    {
        return $this->Motdepasse;
    }

    public function setMotdepasse(string $Motdepasse): self
    {
        $this->Motdepasse = $Motdepasse;

        return $this;
    }

    /**
     * @return Collection|Partenaire[]
     */
    public function getCréerPartenaire(): Collection
    {
        return $this->créerPartenaire;
    }

    public function addCrErPartenaire(Partenaire $crErPartenaire): self
    {
        if (!$this->créerPartenaire->contains($crErPartenaire)) {
            $this->créerPartenaire[] = $crErPartenaire;
            $crErPartenaire->setAdminSysteme($this);
        }

        return $this;
    }

    public function removeCrErPartenaire(Partenaire $crErPartenaire): self
    {
        if ($this->créerPartenaire->contains($crErPartenaire)) {
            $this->créerPartenaire->removeElement($crErPartenaire);
            // set the owning side to null (unless already changed)
            if ($crErPartenaire->getAdminSysteme() === $this) {
                $crErPartenaire->setAdminSysteme(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Caissier[]
     */
    public function getCreerCaissier(): Collection
    {
        return $this->CreerCaissier;
    }

    public function addCreerCaissier(Caissier $creerCaissier): self
    {
        if (!$this->CreerCaissier->contains($creerCaissier)) {
            $this->CreerCaissier[] = $creerCaissier;
            $creerCaissier->setAdminSysteme($this);
        }

        return $this;
    }

    public function removeCreerCaissier(Caissier $creerCaissier): self
    {
        if ($this->CreerCaissier->contains($creerCaissier)) {
            $this->CreerCaissier->removeElement($creerCaissier);
            // set the owning side to null (unless already changed)
            if ($creerCaissier->getAdminSysteme() === $this) {
                $creerCaissier->setAdminSysteme(null);
            }
        }

        return $this;
    }
}
