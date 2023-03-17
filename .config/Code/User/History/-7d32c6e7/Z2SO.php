<?php

namespace App\Entity;

use App\Repository\RapportVisiteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RapportVisiteRepository::class)]
class RapportVisite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $bilan = null;

    #[ORM\Column(length: 255)]
    private ?string $dateVisite = null;

    #[ORM\Column(length: 255)]
    private ?string $dateRedactionRp = null;

    #[ORM\ManyToOne(inversedBy: 'rapportVisites')]
    private ?Visiteur $visiteur = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBilan(): ?string
    {
        return $this->bilan;
    }

    public function setBilan(string $bilan): self
    {
        $this->bilan = $bilan;

        return $this;
    }

    public function getDateVisite(): ?string
    {
        return $this->dateVisite;
    }

    public function setDateVisite(string $dateVisite): self
    {
        $this->dateVisite = $dateVisite;

        return $this;
    }

    public function getDateRedactionRp(): ?string
    {
        return $this->dateRedactionRp;
    }

    public function setDateRedactionRp(string $dateRedactionRp): self
    {
        $this->dateRedactionRp = $dateRedactionRp;

        return $this;
    }

    public function getVisiteur(): ?Visiteur
    {
        return $this->visiteur;
    }

    public function setVisiteur(?Visiteur $visiteur): self
    {
        $this->visiteur = $visiteur;

        return $this;
    }

    public function __toString()
    {
        return $this->dateVisite;
    }
  
}
