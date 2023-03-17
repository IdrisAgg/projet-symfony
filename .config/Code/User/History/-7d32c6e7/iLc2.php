<?php

namespace App\Entity;

use App\Repository\RapportVisiteRepository;
use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\Date;

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
    private ?Date $dateVisite = null;

    #[ORM\Column(length: 255)]
    private ?Date $dateRedactionRp = null;

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

    public function getDateVisite(): ?Date
    {
        return $this->dateVisite;
    }

    public function setDateVisite(Date $dateVisite): self
    {
        $this->dateVisite = $dateVisite;

        return $this;
    }

    public function getDateRedactionRp(): ?DateTimeInterface
    {
        return $this->dateRedactionRp;
    }

    public function setDateRedactionRp(Date $dateRedactionRp): self
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
        return $this->dateRedactionRp;
        return $this->bilan;
    }
  
}
