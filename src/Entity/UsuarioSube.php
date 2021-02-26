<?php

namespace App\Entity;

use App\Repository\UsuarioSubeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UsuarioSubeRepository::class)
 */
class UsuarioSube
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Usuarios::class, inversedBy="usuarioSubes")
     */
    private $usuario;

    /**
     * @ORM\ManyToOne(targetEntity=Mountains::class, inversedBy="usuarioSubes")
     */
    private $mountain;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsuario(): ?Usuarios
    {
        return $this->usuario;
    }

    public function setUsuario(?Usuarios $usuario): self
    {
        $this->usuario = $usuario;

        return $this;
    }

    public function getMountain(): ?Mountains
    {
        return $this->mountain;
    }

    public function setMountain(?Mountains $mountain): self
    {
        $this->mountain = $mountain;

        return $this;
    }
    
    //toString
    public function __toString(){
      // to show the name of the Category in the select
      return "";
    }
}
