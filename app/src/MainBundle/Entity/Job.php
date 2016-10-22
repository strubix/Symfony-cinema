<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Job
 */
class Job
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $idJob;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $salaire;

    /**
     * @var boolean
     */
    private $cadre;


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
     * Set idJob
     *
     * @param integer $idJob
     * @return Job
     */
    public function setIdJob($idJob)
    {
        $this->idJob = $idJob;

        return $this;
    }

    /**
     * Get idJob
     *
     * @return integer 
     */
    public function getIdJob()
    {
        return $this->idJob;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Job
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set salaire
     *
     * @param string $salaire
     * @return Job
     */
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;

        return $this;
    }

    /**
     * Get salaire
     *
     * @return string 
     */
    public function getSalaire()
    {
        return $this->salaire;
    }

    /**
     * Set cadre
     *
     * @param boolean $cadre
     * @return Job
     */
    public function setCadre($cadre)
    {
        $this->cadre = $cadre;

        return $this;
    }

    /**
     * Get cadre
     *
     * @return boolean 
     */
    public function getCadre()
    {
        return $this->cadre;
    }
}
