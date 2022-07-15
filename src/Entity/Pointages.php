<?php

namespace App\Entity;

use App\Repository\PointagesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PointagesRepository::class)]
class Pointages
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column()]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Utilisateurs $utilisateurId = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Chantiers $chantierId = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateDePointage = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $dureeDePointage = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUtilisateurId(): ?Utilisateurs
    {
        return $this->utilisateurId;
    }

    public function setUtilisateurId(?Utilisateurs $utilisateurId): self
    {
        $this->utilisateurId = $utilisateurId;

        return $this;
    }

    public function getChantierId(): ?Chantiers
    {
        return $this->chantierId;
    }

    public function setChantierId(?Chantiers $chantierId): self
    {
        $this->chantierId = $chantierId;

        return $this;
    }

    public function getDateDePointage(): ?\DateTimeInterface
    {
        return $this->dateDePointage;
    }

    public function setDateDePointage(\DateTimeInterface $dateDePointage): self
    {
        $this->dateDePointage = $dateDePointage;

        return $this;
    }

    public function getDureeDePointage(): ?\DateTimeInterface
    {
        return $this->dureeDePointage;
    }

    public function setDureeDePointage(\DateTimeInterface $dureeDePointage): self
    {
        $this->dureeDePointage = $dureeDePointage;

        return $this;
    }
}
