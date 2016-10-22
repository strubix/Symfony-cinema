<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Membre
 */
class Membre
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $idFichePerso;

    /**
     * @var integer
     */
    private $idAbo;

    /**
     * @var \DateTime
     */
    private $dateAbo;

    /**
     * @var integer
     */
    private $idDernierFilm;

    /**
     * @var \DateTime
     */
    private $dateDernierFilm;

    /**
     * @var \DateTime
     */
    private $dateInscription;


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
     * Set idFichePerso
     *
     * @param integer $idFichePerso
     * @return Membre
     */
    public function setIdFichePerso($idFichePerso)
    {
        $this->idFichePerso = $idFichePerso;

        return $this;
    }

    /**
     * Get idFichePerso
     *
     * @return integer 
     */
    public function getIdFichePerso()
    {
        return $this->idFichePerso;
    }

    /**
     * Set idAbo
     *
     * @param integer $idAbo
     * @return Membre
     */
    public function setIdAbo($idAbo)
    {
        $this->idAbo = $idAbo;

        return $this;
    }

    /**
     * Get idAbo
     *
     * @return integer 
     */
    public function getIdAbo()
    {
        return $this->idAbo;
    }

    /**
     * Set dateAbo
     *
     * @param \DateTime $dateAbo
     * @return Membre
     */
    public function setDateAbo($dateAbo)
    {
        $this->dateAbo = $dateAbo;

        return $this;
    }

    /**
     * Get dateAbo
     *
     * @return \DateTime 
     */
    public function getDateAbo()
    {
        return $this->dateAbo;
    }

    /**
     * Set idDernierFilm
     *
     * @param integer $idDernierFilm
     * @return Membre
     */
    public function setIdDernierFilm($idDernierFilm)
    {
        $this->idDernierFilm = $idDernierFilm;

        return $this;
    }

    /**
     * Get idDernierFilm
     *
     * @return integer 
     */
    public function getIdDernierFilm()
    {
        return $this->idDernierFilm;
    }

    /**
     * Set dateDernierFilm
     *
     * @param \DateTime $dateDernierFilm
     * @return Membre
     */
    public function setDateDernierFilm($dateDernierFilm)
    {
        $this->dateDernierFilm = $dateDernierFilm;

        return $this;
    }

    /**
     * Get dateDernierFilm
     *
     * @return \DateTime 
     */
    public function getDateDernierFilm()
    {
        return $this->dateDernierFilm;
    }

    /**
     * Set dateInscription
     *
     * @param \DateTime $dateInscription
     * @return Membre
     */
    public function setDateInscription($dateInscription)
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }

    /**
     * Get dateInscription
     *
     * @return \DateTime 
     */
    public function getDateInscription()
    {
        return $this->dateInscription;
    }
}
