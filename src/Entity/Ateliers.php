<?php

namespace App\Entity;

use App\Repository\AteliersRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AteliersRepository::class)]
class Ateliers
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $nomAtelier = null;

    #[ORM\Column(length: 2000)]
    private ?string $descrAtelier = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateAtelier = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateFinAtelier = null;

    #[ORM\Column]
    private ?int $placesAtelier = null;

    #[ORM\Column(nullable: true)]
    private ?int $prixAtelier = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomAtelier(): ?string
    {
        return $this->nomAtelier;
    }

    public function setNomAtelier(string $nomAtelier): static
    {
        $this->nomAtelier = $nomAtelier;

        return $this;
    }

    public function getDescrAtelier(): ?string
    {
        return $this->descrAtelier;
    }

    public function setDescrAtelier(string $descrAtelier): static
    {
        $this->descrAtelier = $descrAtelier;

        return $this;
    }

    public function getDateAtelier(): ?\DateTimeInterface
    {
        return $this->dateAtelier;
    }

    public function setDateAtelier(\DateTimeInterface $dateAtelier): static
    {
        $this->dateAtelier = $dateAtelier;

        return $this;
    }

    public function getDateFinAtelier(): ?\DateTimeInterface
    {
        return $this->dateFinAtelier;
    }

    public function setDateFinAtelier(\DateTimeInterface $dateFinAtelier): static
    {
        $this->dateFinAtelier = $dateFinAtelier;

        return $this;
    }

    public function getPlacesAtelier(): ?int
    {
        return $this->placesAtelier;
    }

    public function setPlacesAtelier(int $placesAtelier): static
    {
        $this->placesAtelier = $placesAtelier;

        return $this;
    }

    public function getPrixAtelier(): ?int
    {
        return $this->prixAtelier;
    }

    public function setPrixAtelier(?int $prixAtelier): static
    {
        $this->prixAtelier = $prixAtelier;

        return $this;
    }
}
