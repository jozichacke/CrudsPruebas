<?php

namespace AppBundle\Entity;

/**
 * direcciones
 */
class direcciones
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $codigoPostal;

    /**
     * @var string
     */
    private $calle;

    /**
     * @var int
     */
    private $numeroExterior;

    /**
     * @var string
     */
    private $numeroInterior;

    /**
     * @var string
     */
    private $delegacion;

    /**
     * @var string
     */
    private $colonia;


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
     * Set codigoPostal
     *
     * @param integer $codigoPostal
     *
     * @return direcciones
     */
    public function setCodigoPostal($codigoPostal)
    {
        $this->codigoPostal = $codigoPostal;

        return $this;
    }

    /**
     * Get codigoPostal
     *
     * @return int
     */
    public function getCodigoPostal()
    {
        return $this->codigoPostal;
    }

    /**
     * Set calle
     *
     * @param string $calle
     *
     * @return direcciones
     */
    public function setCalle($calle)
    {
        $this->calle = $calle;

        return $this;
    }

    /**
     * Get calle
     *
     * @return string
     */
    public function getCalle()
    {
        return $this->calle;
    }

    /**
     * Set numeroExterior
     *
     * @param integer $numeroExterior
     *
     * @return direcciones
     */
    public function setNumeroExterior($numeroExterior)
    {
        $this->numeroExterior = $numeroExterior;

        return $this;
    }

    /**
     * Get numeroExterior
     *
     * @return int
     */
    public function getNumeroExterior()
    {
        return $this->numeroExterior;
    }

    /**
     * Set numeroInterior
     *
     * @param string $numeroInterior
     *
     * @return direcciones
     */
    public function setNumeroInterior($numeroInterior)
    {
        $this->numeroInterior = $numeroInterior;

        return $this;
    }

    /**
     * Get numeroInterior
     *
     * @return string
     */
    public function getNumeroInterior()
    {
        return $this->numeroInterior;
    }

    /**
     * Set delegacion
     *
     * @param string $delegacion
     *
     * @return direcciones
     */
    public function setDelegacion($delegacion)
    {
        $this->delegacion = $delegacion;

        return $this;
    }

    public function __toString()
    {
    return $this->delegacion;
    }

    /**
     * Get delegacion
     *
     * @return string
     */
    public function getDelegacion()
    {
        return $this->delegacion;
    }

    /**
     * Set colonia
     *
     * @param string $colonia
     *
     * @return direcciones
     */
    public function setColonia($colonia)
    {
        $this->colonia = $colonia;

        return $this;
    }
    /**
     * Get colonia
     *
     * @return string
     */
    public function getColonia()
    {
        return $this->colonia;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $users;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add user
     *
     * @param \AppBundle\Entity\usuarios $user
     *
     * @return direcciones
     */
    public function addUser(\AppBundle\Entity\usuarios $user)
    {
        $this->users[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \AppBundle\Entity\usuarios $user
     */
    public function removeUser(\AppBundle\Entity\usuarios $user)
    {
        $this->users->removeElement($user);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsers()
    {
        return $this->users;
    }
}
