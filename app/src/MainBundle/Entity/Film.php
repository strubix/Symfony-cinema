<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Film
 */
class Film
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var boolean
     */
    private $idGenre;

    /**
     * @var integer
     */
    private $idDistrib;

    /**
     * @var string
     */
    private $titre;

    /**
     * @var string
     */
    private $resum;

    /**
     * @var \DateTime
     */
    private $dateDebutAffiche;

    /**
     * @var \DateTime
     */
    private $dateFinAffiche;

    /**
     * @var integer
     */
    private $dureeMin;

    /**
     * @var integer
     */
    private $anneeProd;


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
     * Set idGenre
     *
     * @param boolean $idGenre
     * @return Film
     */
    public function setIdGenre($idGenre)
    {
        $this->idGenre = $idGenre;

        return $this;
    }

    /**
     * Get idGenre
     *
     * @return boolean 
     */
    public function getIdGenre()
    {
        return $this->idGenre;
    }

    /**
     * Set idDistrib
     *
     * @param integer $idDistrib
     * @return Film
     */
    public function setIdDistrib($idDistrib)
    {
        $this->idDistrib = $idDistrib;

        return $this;
    }

    /**
     * Get idDistrib
     *
     * @return integer 
     */
    public function getIdDistrib()
    {
        return $this->idDistrib;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Film
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set resum
     *
     * @param string $resum
     * @return Film
     */
    public function setResum($resum)
    {
        $this->resum = $resum;

        return $this;
    }

    /**
     * Get resum
     *
     * @return string 
     */
    public function getResum()
    {
        return $this->resum;
    }

    /**
     * Set dateDebutAffiche
     *
     * @param \DateTime $dateDebutAffiche
     * @return Film
     */
    public function setDateDebutAffiche($dateDebutAffiche)
    {
        $this->dateDebutAffiche = $dateDebutAffiche;

        return $this;
    }

    /**
     * Get dateDebutAffiche
     *
     * @return \DateTime 
     */
    public function getDateDebutAffiche()
    {
        return $this->dateDebutAffiche;
    }

    /**
     * Set dateFinAffiche
     *
     * @param \DateTime $dateFinAffiche
     * @return Film
     */
    public function setDateFinAffiche($dateFinAffiche)
    {
        $this->dateFinAffiche = $dateFinAffiche;

        return $this;
    }

    /**
     * Get dateFinAffiche
     *
     * @return \DateTime 
     */
    public function getDateFinAffiche()
    {
        return $this->dateFinAffiche;
    }

    /**
     * Set dureeMin
     *
     * @param integer $dureeMin
     * @return Film
     */
    public function setDureeMin($dureeMin)
    {
        $this->dureeMin = $dureeMin;

        return $this;
    }

    /**
     * Get dureeMin
     *
     * @return integer 
     */
    public function getDureeMin()
    {
        return $this->dureeMin;
    }

    /**
     * Set anneeProd
     *
     * @param integer $anneeProd
     * @return Film
     */
    public function setAnneeProd($anneeProd)
    {
        $this->anneeProd = $anneeProd;

        return $this;
    }

    /**
     * Get anneeProd
     *
     * @return integer 
     */
    public function getAnneeProd()
    {
        return $this->anneeProd;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $genres;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->genres = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add genres
     *
     * @param \MainBundle\Entity\Genre $genres
     * @return Film
     */
    public function addGenre(\MainBundle\Entity\Genre $genres)
    {
        $this->genres[] = $genres;

        return $this;
    }

    /**
     * Remove genres
     *
     * @param \MainBundle\Entity\Genre $genres
     */
    public function removeGenre(\MainBundle\Entity\Genre $genres)
    {
        $this->genres->removeElement($genres);
    }

    /**
     * Get genres
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGenres()
    {
        return $this->genres;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $genre;


    /**
     * Get genre
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGenre()
    {
        return $this->genre;
    }
}
