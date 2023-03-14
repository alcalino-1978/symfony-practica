<?php

namespace App\Entity;

use App\Repository\IdiomasRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: IdiomasRepository::class)]
class Idiomas
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre = null;

    #[ORM\Column(length: 255)]
    private ?string $hablado = null;

    #[ORM\Column(length: 255)]
    private ?string $escrito = null;

    #[ORM\Column]
    private ?bool $certificacion = null;

    #[ORM\ManyToOne(inversedBy: 'idiomas')]
    private ?DatosPersonales $datosPersonales = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getHablado(): ?string
    {
        return $this->hablado;
    }

    public function setHablado(string $hablado): self
    {
        $this->hablado = $hablado;

        return $this;
    }

    public function getEscrito(): ?string
    {
        return $this->escrito;
    }

    public function setEscrito(string $escrito): self
    {
        $this->escrito = $escrito;

        return $this;
    }

    public function isCertificacion(): ?bool
    {
        return $this->certificacion;
    }

    public function setCertificacion(bool $certificacion): self
    {
        $this->certificacion = $certificacion;

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
