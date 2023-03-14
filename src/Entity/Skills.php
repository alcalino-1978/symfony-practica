<?php

namespace App\Entity;

use App\Repository\SkillsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SkillsRepository::class)]
class Skills
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $hard = null;

    #[ORM\Column(length: 255)]
    private ?string $soft = null;

    #[ORM\ManyToOne(inversedBy: 'skills')]
    private ?DatosPersonales $datosPersonales = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHard(): ?string
    {
        return $this->hard;
    }

    public function setHard(string $hard): self
    {
        $this->hard = $hard;

        return $this;
    }

    public function getSoft(): ?string
    {
        return $this->soft;
    }

    public function setSoft(string $soft): self
    {
        $this->soft = $soft;

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
