<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\NoticiaRepository")
 */
class Noticia
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $seccion;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $equipo;

    /**
     * @ORM\Column(type="string", length=8)
     */
    private $fecha;

    /**
     * @ORM\Column(type="text")
     */
    private $textoNoticia;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $textoTitular;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $imagen;

    /**
     * @return mixed
     */
    public function getSeccion()
    {
        return $this->seccion;
    }

    /**
     * @param mixed $seccion
     */
    public function setSeccion($seccion): void
    {
        $this->seccion = $seccion;
    }

    /**
     * @return mixed
     */
    public function getEquipo()
    {
        return $this->equipo;
    }

    /**
     * @param mixed $equipo
     */
    public function setEquipo($equipo): void
    {
        $this->equipo = $equipo;
    }

    /**
     * @return mixed
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * @param mixed $fecha
     */
    public function setFecha($fecha): void
    {
        $this->fecha = $fecha;
    }

    /**
     * @return mixed
     */
    public function getTextoNoticia()
    {
        return $this->textoNoticia;
    }

    /**
     * @param mixed $textoNoticia
     */
    public function setTextoNoticia($textoNoticia): void
    {
        $this->textoNoticia = $textoNoticia;
    }

    /**
     * @return mixed
     */
    public function getTextoTitular()
    {
        return $this->textoTitular;
    }

    /**
     * @param mixed $textoTitular
     */
    public function setTextoTitular($textoTitular): void
    {
        $this->textoTitular = $textoTitular;
    }

    /**
     * @return mixed
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * @param mixed $imagen
     */
    public function setImagen($imagen): void
    {
        $this->imagen = $imagen;
    }



}
