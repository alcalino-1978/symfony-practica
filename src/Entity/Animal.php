<?php

namespace App\Entity;

use App\Repository\AnimalRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AnimalRepository::class)]
class Animal
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $Pasos = null;

    #[ORM\Column(length: 255)]
    private ?string $Nombre = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $Nacimiento = null;

    #[ORM\ManyToOne(inversedBy: 'animales')]
    #[ORM\JoinColumn(nullable: true)]
    private ?Sitios $Sitio = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPasos(): ?int
    {
        return $this->Pasos;
    }

    public function setPasos(int $Pasos): self
    {
        $this->Pasos = $Pasos;

        return $this;
    }

    public function getNombre(): ?string
    {
        return $this->Nombre;
    }

    public function setNombre(string $Nombre): self
    {
        $this->Nombre = $Nombre;

        return $this;
    }

    public function getNacimiento(): ?\DateTimeInterface
    {
        return $this->Nacimiento;
    }

    public function setNacimiento(?\DateTimeInterface $Nacimiento): self
    {
        $this->Nacimiento = $Nacimiento;

        return $this;
    }

    public function getSitio(): ?Sitios
    {
        return $this->Sitio;
    }

    public function setSitio(?Sitios $Sitio): self
    {
        $this->Sitio = $Sitio;

        return $this;
    }
}
