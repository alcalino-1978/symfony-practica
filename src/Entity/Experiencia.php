<?php

namespace App\Entity;

use App\Repository\ExperienciaRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ExperienciaRepository::class)]
class Experiencia
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $empresa = null;

    #[ORM\Column(length: 255)]
    private ?string $puesto = null;

    #[ORM\Column(length: 255)]
    private ?string $periodo = null;

    #[ORM\Column(length: 255)]
    private ?string $descripcion = null;

    #[ORM\ManyToOne(inversedBy: 'experiencias')]
    private ?DatosPersonales $datosPersonales = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmpresa(): ?string
    {
        return $this->empresa;
    }

    public function setEmpresa(string $empresa): self
    {
        $this->empresa = $empresa;

        return $this;
    }

    public function getPuesto(): ?string
    {
        return $this->puesto;
    }

    public function setPuesto(string $puesto): self
    {
        $this->puesto = $puesto;

        return $this;
    }

    public function getPeriodo(): ?string
    {
        return $this->periodo;
    }

    public function setPeriodo(string $periodo): self
    {
        $this->periodo = $periodo;

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
