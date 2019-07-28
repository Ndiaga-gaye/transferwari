<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\PartenaireRepository")
 */
class Partenaire
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
    private $Identifiant;

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
    private $Numeroidentite;

    /**
     * @ORM\Column(type="integer")
     */
    private $Contact;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Login;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Motdepasse;

    /**
     * @ORM\Column(type="string")
     */
    private $Datecreation;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\AdminSysteme", inversedBy="créerPartenaire")
     */
    private $adminSysteme;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\SousPartenaire", mappedBy="partenaire")
     */
    private $CreerSousPartenaire;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Versement", mappedBy="partenaire")
     */
    private $MontantVerse;
  
    public function __construct()
    {
        $this->CreerSousPartenaire = new ArrayCollection();
        $this->MontantVerse = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdentifiant(): ?string
    {
        return $this->Identifiant;
    }

    public function setIdentifiant(string $Identifiant): self
    {
        $this->Identifiant = $Identifiant;

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

    public function getNumeroidentite(): ?int
    {
        return $this->Numeroidentite;
    }

    public function setNumeroidentite(int $Numeroidentite): self
    {
        $this->Numeroidentite = $Numeroidentite;

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

    public function getDatecreation(): ?string
    {
        return $this->Datecreation;
    }

    public function setDatecreation(string $Datecreation): self
    {
        $this->Datecreation = $Datecreation;

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
     * @return Collection|SousPartenaire[]
     */
    public function getCreerSousPartenaire(): Collection
    {
        return $this->CreerSousPartenaire;
    }

    public function addCreerSousPartenaire(SousPartenaire $creerSousPartenaire): self
    {
        if (!$this->CreerSousPartenaire->contains($creerSousPartenaire)) {
            $this->CreerSousPartenaire[] = $creerSousPartenaire;
            $creerSousPartenaire->setPartenaire($this);
        }

        return $this;
    }

    public function removeCreerSousPartenaire(SousPartenaire $creerSousPartenaire): self
    {
        if ($this->CreerSousPartenaire->contains($creerSousPartenaire)) {
            $this->CreerSousPartenaire->removeElement($creerSousPartenaire);
            // set the owning side to null (unless already changed)
            if ($creerSousPartenaire->getPartenaire() === $this) {
                $creerSousPartenaire->setPartenaire(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Versement[]
     */
    public function getMontantVerse(): Collection
    {
        return $this->MontantVerse;
    }

    public function addMontantVerse(Versement $montantVerse): self
    {
        if (!$this->MontantVerse->contains($montantVerse)) {
            $this->MontantVerse[] = $montantVerse;
            $montantVerse->setPartenaire($this);
        }

        return $this;
    }

    public function removeMontantVerse(Versement $montantVerse): self
    {
        if ($this->MontantVerse->contains($montantVerse)) {
            $this->MontantVerse->removeElement($montantVerse);
            // set the owning side to null (unless already changed)
            if ($montantVerse->getPartenaire() === $this) {
                $montantVerse->setPartenaire(null);
            }
        }

        return $this;
    }
}
