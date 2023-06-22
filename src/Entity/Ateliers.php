<?php

namespace App\Entity;

use App\Repository\AteliersRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

#[ORM\Entity(repositoryClass: AteliersRepository::class)]
#[Vich\Uploadable]
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

    #[Vich\UploadableField(mapping: 'images', fileNameProperty: 'imageName', size: 'imageSize')]
    private ?File $imageFile = null;

    #[ORM\Column(nullable: true)]
    private ?string $imageName = null;

    #[ORM\Column(nullable: true)]
    private ?int $imageSize = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $updatedAt = null;


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

/**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile|null $imageFile
     */

    public function setImageFile(?File $imageFile = null): void
    {
        $this->imageFile = $imageFile;

        if (null !== $imageFile) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }
    
    public function setImageName(?string $imageName): void
    {
        $this->imageName = $imageName;
    }

    public function getImageName(): ?string
    {
        return $this->imageName;
    }

    public function setImageSize(?int $imageSize): void
    {
        $this->imageSize = $imageSize;
    }

    public function getImageSize(): ?int
    {
        return $this->imageSize;
    }
}
