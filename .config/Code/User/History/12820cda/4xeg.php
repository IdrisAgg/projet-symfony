<?php

namespace App\Entity;

use App\Repository\DelegueRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DelegueRepository::class)]
class Delegue extends Visiteur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }
}
