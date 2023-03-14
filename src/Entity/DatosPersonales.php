<?php

namespace App\Entity;

use App\Repository\DatosPersonalesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DatosPersonalesRepository::class)]
class DatosPersonales
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre = null;

    #[ORM\Column(length: 255)]
    private ?string $apellidos = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $imagen = null;

    #[ORM\Column(length: 255)]
    private ?string $telefono = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $linkedin = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $github = null;

    #[ORM\OneToMany(mappedBy: 'datosPersonales', targetEntity: Education::class)]
    private Collection $education;

    #[ORM\OneToMany(mappedBy: 'datosPersonales', targetEntity: Experiencia::class)]
    private Collection $experiencias;

    #[ORM\OneToMany(mappedBy: 'datosPersonales', targetEntity: Skills::class)]
    private Collection $skills;

    #[ORM\OneToMany(mappedBy: 'datosPersonales', targetEntity: Idiomas::class)]
    private Collection $idiomas;

    public function __construct()
    {
        $this->education = new ArrayCollection();
        $this->experiencias = new ArrayCollection();
        $this->skills = new ArrayCollection();
        $this->idiomas = new ArrayCollection();
    }

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

    public function getApellidos(): ?string
    {
        return $this->apellidos;
    }

    public function setApellidos(string $apellidos): self
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    public function getImagen(): ?string
    {
        return $this->imagen;
    }

    public function setImagen(?string $imagen): self
    {
        $this->imagen = $imagen;

        return $this;
    }

    public function getTelefono(): ?string
    {
        return $this->telefono;
    }

    public function setTelefono(string $telefono): self
    {
        $this->telefono = $telefono;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getLinkedin(): ?string
    {
        return $this->linkedin;
    }

    public function setLinkedin(?string $linkedin): self
    {
        $this->linkedin = $linkedin;

        return $this;
    }

    public function getGithub(): ?string
    {
        return $this->github;
    }

    public function setGithub(?string $github): self
    {
        $this->github = $github;

        return $this;
    }

    /**
     * @return Collection<int, Education>
     */
    public function getEducation(): Collection
    {
        return $this->education;
    }

    public function addEducation(Education $education): self
    {
        if (!$this->education->contains($education)) {
            $this->education->add($education);
            $education->setDatosPersonales($this);
        }

        return $this;
    }

    public function removeEducation(Education $education): self
    {
        if ($this->education->removeElement($education)) {
            // set the owning side to null (unless already changed)
            if ($education->getDatosPersonales() === $this) {
                $education->setDatosPersonales(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Experiencia>
     */
    public function getExperiencias(): Collection
    {
        return $this->experiencias;
    }

    public function addExperiencia(Experiencia $experiencia): self
    {
        if (!$this->experiencias->contains($experiencia)) {
            $this->experiencias->add($experiencia);
            $experiencia->setDatosPersonales($this);
        }

        return $this;
    }

    public function removeExperiencia(Experiencia $experiencia): self
    {
        if ($this->experiencias->removeElement($experiencia)) {
            // set the owning side to null (unless already changed)
            if ($experiencia->getDatosPersonales() === $this) {
                $experiencia->setDatosPersonales(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Skills>
     */
    public function getSkills(): Collection
    {
        return $this->skills;
    }

    public function addSkill(Skills $skill): self
    {
        if (!$this->skills->contains($skill)) {
            $this->skills->add($skill);
            $skill->setDatosPersonales($this);
        }

        return $this;
    }

    public function removeSkill(Skills $skill): self
    {
        if ($this->skills->removeElement($skill)) {
            // set the owning side to null (unless already changed)
            if ($skill->getDatosPersonales() === $this) {
                $skill->setDatosPersonales(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Idiomas>
     */
    public function getIdiomas(): Collection
    {
        return $this->idiomas;
    }

    public function addIdioma(Idiomas $idioma): self
    {
        if (!$this->idiomas->contains($idioma)) {
            $this->idiomas->add($idioma);
            $idioma->setDatosPersonales($this);
        }

        return $this;
    }

    public function removeIdioma(Idiomas $idioma): self
    {
        if ($this->idiomas->removeElement($idioma)) {
            // set the owning side to null (unless already changed)
            if ($idioma->getDatosPersonales() === $this) {
                $idioma->setDatosPersonales(null);
            }
        }

        return $this;
    }
}
