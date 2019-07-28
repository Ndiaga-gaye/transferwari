<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\CaissierRepository")
 */
class Caissier
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
    private $Identite;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Adresse;

    /**
     * @ORM\Column(type="integer")
     */
    private $Contact;

    /**
     * @ORM\Column(type="integer")
     */
    private $NumeroIdentite;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Login;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Motdepasse;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\AdminSysteme", inversedBy="CreerCaissier")
     */
    private $adminSysteme;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Versement", mappedBy="caissier")
     */
    private $Montantverse;

    public function __construct()
    {
        $this->Montantverse = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdentite(): ?string
    {
        return $this->Identite;
    }

    public function setIdentite(string $Identite): self
    {
        $this->Identite = $Identite;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): self
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->Adresse;
    }

    public function setAdresse(string $Adresse): self
    {
        $this->Adresse = $Adresse;

        return $this;
    }

    public function getContact(): ?int
    {
        return $this->Contact;
    }

    public function setContact(int $Contact): self
    {
        $this->Contact = $Contact;

        return $this;
    }

    public function getNumeroIdentite(): ?int
    {
        return $this->NumeroIdentite;
    }

    public function setNumeroIdentite(int $NumeroIdentite): self
    {
        $this->NumeroIdentite = $NumeroIdentite;

        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->Login;
    }

    public function setLogin(string $Login): self
    {
        $this->Login = $Login;

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

    public function getAdminSysteme(): ?AdminSysteme
    {
        return $this->adminSysteme;
    }

    public function setAdminSysteme(?AdminSysteme $adminSysteme): self
    {
        $this->adminSysteme = $adminSysteme;

        return $this;
    }

    /**
     * @return Collection|Versement[]
     */
    public function getMontantverse(): Collection
    {
        return $this->Montantverse;
    }

    public function addMontantverse(Versement $montantverse): self
    {
        if (!$this->Montantverse->contains($montantverse)) {
            $this->Montantverse[] = $montantverse;
            $montantverse->setCaissier($this);
        }

        return $this;
    }

    public function removeMontantverse(Versement $montantverse): self
    {
        if ($this->Montantverse->contains($montantverse)) {
            $this->Montantverse->removeElement($montantverse);
            // set the owning side to null (unless already changed)
            if ($montantverse->getCaissier() === $this) {
                $montantverse->setCaissier(null);
            }
        }

        return $this;
    }
}
