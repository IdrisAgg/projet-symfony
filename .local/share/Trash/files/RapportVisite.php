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
    private ?string $date_visite = null;

    #[ORM\Column(length: 255)]
    private ?string $date_redaction_rp = null;

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
        return $this->date_visite;
    }

    public function setDateVisite(string $date_visite): self
    {
        $this->date_visite = $date_visite;

        return $this;
    }

    public function getDateRedactionRp(): ?string
    {
        return $this->date_redaction_rp;
    }

    public function setDateRedactionRp(string $date_redaction_rp): self
    {
        $this->date_redaction_rp = $date_redaction_rp;

        return $this;
    }
}
