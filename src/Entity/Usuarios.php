<?php

namespace App\Entity;

use App\Repository\UsuariosRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UsuariosRepository::class)
 */
class Usuarios
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
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\OneToMany(targetEntity=UsuarioSube::class, mappedBy="usuario")
     */
    private $usuarioSubes;

    public function __construct()
    {
        $this->usuarioSubes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

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
            $usuarioSube->setUsuario($this);
        }

        return $this;
    }

    public function removeUsuarioSube(UsuarioSube $usuarioSube): self
    {
        if ($this->usuarioSubes->removeElement($usuarioSube)) {
            // set the owning side to null (unless already changed)
            if ($usuarioSube->getUsuario() === $this) {
                $usuarioSube->setUsuario(null);
            }
        }

        return $this;
    }
    
    //toString
    public function __toString(){
      // to show the name of the Category in the select
      return $this->email . $this->password;
    }
}
