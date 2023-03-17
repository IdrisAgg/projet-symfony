<?php

namespace App\Entity;

use App\Repository\MedicamentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MedicamentRepository::class)]
class Medicament
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $depot_legal = null;

    #[ORM\Column(length: 255)]
    private ?string $nomCommercial = null;

    #[ORM\Column(length: 255)]
    private ?string $code = null;

    #[ORM\Column(length: 255)]
    private ?string $composition = null;

    #[ORM\Column(length: 255)]
    private ?string $effets_indesirable = null;

    #[ORM\Column(length: 255)]
    private ?string $contre_indication = null;

    #[ORM\Column(length: 255)]
    private ?string $prix_echantillon = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDepotLegal(): ?string
    {
        return $this->depot_legal;
    }

    public function setDepotLegal(string $depot_legal): self
    {
        $this->depot_legal = $depot_legal;

        return $this;
    }

    public function getNomCommercial(): ?string
    {
        return $this->nomCommercial;
    }

    public function setNomCommercial(string $nomCommercial): self
    {
        $this->nomCommercial = $nomCommercial;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getComposition(): ?string
    {
        return $this->composition;
    }

    public function setComposition(string $composition): self
    {
        $this->composition = $composition;

        return $this;
    }

    public function getEffetsIndesirable(): ?string
    {
        return $this->effets_indesirable;
    }

    public function setEffetsIndesirable(string $effets_indesirable): self
    {
        $this->effets_indesirable = $effets_indesirable;

        return $this;
    }

    public function getContreIndication(): ?string
    {
        return $this->contre_indication;
    }

    public function setContreIndication(string $contre_indication): self
    {
        $this->contre_indication = $contre_indication;

        return $this;
    }

    public function getPrixEchantillon(): ?string
    {
        return $this->prix_echantillon;
    }

    public function setPrixEchantillon(string $prix_echantillon): self
    {
        $this->prix_echantillon = $prix_echantillon;

        return $this;
    }
}
