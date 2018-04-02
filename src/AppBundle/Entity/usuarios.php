<?php

namespace AppBundle\Entity;

/**
 * usuarios
 */
class usuarios
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $usuario;

    /**
     * @var string
     */
    private $apellidoPaterno;

    /**
     * @var string
     */
    private $apellidoMaterno;

    /**
     * @var string
     */
    private $edad;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set usuario
     *
     * @param string $usuario
     *
     * @return usuarios
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return string
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set apellidoPaterno
     *
     * @param string $apellidoPaterno
     *
     * @return usuarios
     */
    public function setApellidoPaterno($apellidoPaterno)
    {
        $this->apellidoPaterno = $apellidoPaterno;

        return $this;
    }

    /**
     * Get apellidoPaterno
     *
     * @return string
     */
    public function getApellidoPaterno()
    {
        return $this->apellidoPaterno;
    }

    /**
     * Set apellidoMaterno
     *
     * @param string $apellidoMaterno
     *
     * @return usuarios
     */
    public function setApellidoMaterno($apellidoMaterno)
    {
        $this->apellidoMaterno = $apellidoMaterno;

        return $this;
    }

    /**
     * Get apellidoMaterno
     *
     * @return string
     */
    public function getApellidoMaterno()
    {
        return $this->apellidoMaterno;
    }

    /**
     * Set edad
     *
     * @param string $edad
     *
     * @return usuarios
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get edad
     *
     * @return string
     */
    public function getEdad()
    {
        return $this->edad;
    }
    /**
     * @var \AppBundle\Entity\direcciones
     */
    private $direcciones;


    /**
     * Set direcciones
     *
     * @param \AppBundle\Entity\direcciones $direcciones
     *
     * @return usuarios
     */
    public function setDirecciones(\AppBundle\Entity\direcciones $direcciones = null)
    {
        $this->direcciones = $direcciones;

        return $this;
    }

    /**
     * Get direcciones
     *
     * @return \AppBundle\Entity\direcciones
     */
    public function getDirecciones()
    {
        return $this->direcciones;
    }
}
