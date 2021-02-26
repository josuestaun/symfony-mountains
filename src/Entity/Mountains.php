<?php

namespace App\Entity;

use App\Repository\MountainsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MountainsRepository::class)
 */
class Mountains
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $descripcion;

    /**
     * @ORM\Column(type="integer")
     */
    private $altura;

    /**
     * @ORM\Column(type="integer")
     */
    private $desnivel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imagen;

    /**
     * @ORM\OneToMany(targetEntity=UsuarioSube::class, mappedBy="mountain")
     */
    private $usuarioSubes;

    /**
     * @ORM\ManyToOne(targetEntity=Zonas::class, inversedBy="mountains")
     */
    private $zona;

    public function __construct()
    {
        $this->usuarioSubes = new ArrayCollection();
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

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getAltura(): ?int
    {
        return $this->altura;
    }

    public function setAltura(int $altura): self
    {
        $this->altura = $altura;

        return $this;
    }

    public function getDesnivel(): ?int
    {
        return $this->desnivel;
    }

    public function setDesnivel(int $desnivel): self
    {
        $this->desnivel = $desnivel;

        return $this;
    }

    public function getImagen(): ?string
    {
        return $this->imagen;
    }

    public function setImagen(string $imagen): self
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * @return Collection|UsuarioSube[]
     */
    public function getUsuarioSubes(): Collection
    {
        return $this->usuarioSubes;
    }

    public function addUsuarioSube(UsuarioSube $usuarioSube): self
    {
        if (!$this->usuarioSubes->contains($usuarioSube)) {
            $this->usuarioSubes[] = $usuarioSube;
            $usuarioSube->setMountain($this);
        }

        return $this;
    }

    public function removeUsuarioSube(UsuarioSube $usuarioSube): self
    {
        if ($this->usuarioSubes->removeElement($usuarioSube)) {
            // set the owning side to null (unless already changed)
            if ($usuarioSube->getMountain() === $this) {
                $usuarioSube->setMountain(null);
            }
        }

        return $this;
    }

    public function getZona(): ?Zonas
    {
        return $this->zona;
    }

    public function setZona(?Zonas $zona): self
    {
        $this->zona = $zona;

        return $this;
    }
    
    //toString
    public function __toString(){
      // to show the name of the Category in the select
      return $this->nombre . $this->descripcion . $this->altura . $this->desnivel 
              . $this->imagen;
    }
}
