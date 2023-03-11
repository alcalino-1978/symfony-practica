<?php

namespace App\Entity;

use App\Repository\SitiosRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SitiosRepository::class)]
class Sitios
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Nombre = null;

    #[ORM\OneToMany(mappedBy: 'Sitio', targetEntity: Animal::class)]
    private Collection $animales;

    public function __construct()
    {
        $this->animales = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    /**
     * @return Collection<int, Animal>
     */
    public function getAnimales(): Collection
    {
        return $this->animales;
    }

    public function addAnimal(Animal $animal): self
    {
        if (!$this->animales->contains($animal)) {
            $this->animales->add($animal);
            $animal->setSitio($this);
        }

        return $this;
    }

    public function removeAnimal(Animal $animal): self
    {
        if ($this->animales->removeElement($animal)) {
            // set the owning side to null (unless already changed)
            if ($animal->getSitio() === $this) {
                $animal->setSitio(null);
            }
        }

        return $this;
    }
}
