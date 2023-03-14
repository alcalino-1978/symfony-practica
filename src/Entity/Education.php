<?php

namespace App\Entity;

use App\Repository\EducationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EducationRepository::class)]
class Education
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $finalizacion = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nombre = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $centro = null;

    #[ORM\Column(length: 255)]
    private ?string $descripcion = null;

    #[ORM\ManyToOne(inversedBy: 'education')]
    #[ORM\JoinColumn(nullable: false)]
    private ?DatosPersonales $datosPersonales = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFinalizacion(): ?int
    {
        return $this->finalizacion;
    }

    public function setFinalizacion(int $finalizacion): self
    {
        $this->finalizacion = $finalizacion;

        return $this;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(?string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getCentro(): ?string
    {
        return $this->centro;
    }

    public function setCentro(?string $centro): self
    {
        $this->centro = $centro;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getDatosPersonales(): ?DatosPersonales
    {
        return $this->datosPersonales;
    }

    public function setDatosPersonales(?DatosPersonales $datosPersonales): self
    {
        $this->datosPersonales = $datosPersonales;

        return $this;
    }
}
