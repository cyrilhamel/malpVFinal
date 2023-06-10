<?php

namespace App\Entity;

use App\Repository\ProduitsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProduitsRepository::class)]
class Produits
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $nomProduit = null;

    #[ORM\Column(length: 2000)]
    private ?string $descrProduit = null;

    #[ORM\Column(nullable: true)]
    private ?int $prixProduit = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomProduit(): ?string
    {
        return $this->nomProduit;
    }

    public function setNomProduit(string $nomProduit): static
    {
        $this->nomProduit = $nomProduit;

        return $this;
    }

    public function getDescrProduit(): ?string
    {
        return $this->descrProduit;
    }

    public function setDescrProduit(string $descrProduit): static
    {
        $this->descrProduit = $descrProduit;

        return $this;
    }

    public function getPrixProduit(): ?int
    {
        return $this->prixProduit;
    }

    public function setPrixProduit(?int $prixProduit): static
    {
        $this->prixProduit = $prixProduit;

        return $this;
    }
}
