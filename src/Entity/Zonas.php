<?php

namespace App\Entity;

use App\Repository\ZonasRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ZonasRepository::class)
 */
class Zonas
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
    private $pais;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $provincia;

    /**
     * @ORM\OneToMany(targetEntity=Mountains::class, mappedBy="zona")
     */
    private $mountains;

    public function __construct()
    {
        $this->mountains = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPais(): ?string
    {
        return $this->pais;
    }

    public function setPais(string $pais): self
    {
        $this->pais = $pais;

        return $this;
    }

    public function getProvincia(): ?string
    {
        return $this->provincia;
    }

    public function setProvincia(string $provincia): self
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * @return Collection|Mountains[]
     */
    public function getMountains(): Collection
    {
        return $this->mountains;
    }

    public function addMountain(Mountains $mountain): self
    {
        if (!$this->mountains->contains($mountain)) {
            $this->mountains[] = $mountain;
            $mountain->setZona($this);
        }

        return $this;
    }

    public function removeMountain(Mountains $mountain): self
    {
        if ($this->mountains->removeElement($mountain)) {
            // set the owning side to null (unless already changed)
            if ($mountain->getZona() === $this) {
                $mountain->setZona(null);
            }
        }

        return $this;
    }
    
    //toString
    public function __toString(){
      // to show the name of the Category in the select
      return $this->pais . $this->provincia;
    }
}
