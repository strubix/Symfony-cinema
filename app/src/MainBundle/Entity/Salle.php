<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salle
 */
class Salle
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var boolean
     */
    private $numeroSalle;

    /**
     * @var string
     */
    private $nomSalle;

    /**
     * @var integer
     */
    private $etageSalle;

    /**
     * @var integer
     */
    private $nbrSiege;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set numeroSalle
     *
     * @param boolean $numeroSalle
     * @return Salle
     */
    public function setNumeroSalle($numeroSalle)
    {
        $this->numeroSalle = $numeroSalle;

        return $this;
    }

    /**
     * Get numeroSalle
     *
     * @return boolean 
     */
    public function getNumeroSalle()
    {
        return $this->numeroSalle;
    }

    /**
     * Set nomSalle
     *
     * @param string $nomSalle
     * @return Salle
     */
    public function setNomSalle($nomSalle)
    {
        $this->nomSalle = $nomSalle;

        return $this;
    }

    /**
     * Get nomSalle
     *
     * @return string 
     */
    public function getNomSalle()
    {
        return $this->nomSalle;
    }

    /**
     * Set etageSalle
     *
     * @param integer $etageSalle
     * @return Salle
     */
    public function setEtageSalle($etageSalle)
    {
        $this->etageSalle = $etageSalle;

        return $this;
    }

    /**
     * Get etageSalle
     *
     * @return integer 
     */
    public function getEtageSalle()
    {
        return $this->etageSalle;
    }

    /**
     * Set nbrSiege
     *
     * @param integer $nbrSiege
     * @return Salle
     */
    public function setNbrSiege($nbrSiege)
    {
        $this->nbrSiege = $nbrSiege;

        return $this;
    }

    /**
     * Get nbrSiege
     *
     * @return integer 
     */
    public function getNbrSiege()
    {
        return $this->nbrSiege;
    }

    /**
     * Set id
     *
     * @param integer $id
     * @return Salle
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
