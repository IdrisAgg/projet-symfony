<?php

namespace App\Entity;

use App\Repository\RapportVisiteRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

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

    public function getDateVisite(): ?DateTimeType
    {
        return $this->dateVisite;
    }

    public function setDateVisite(DateTimeType $dateVisite): self
    {
        $this->dateVisite = $dateVisite;

        return $this;
    }

    public function getDateRedactionRp(): ?DateType
    {
        return $this->dateRedactionRp;
    }

    public function setDateRedactionRp(DateType $dateRedactionRp): self
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
