<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Genre
 */
class Genre
{
    /**
     * @var boolean
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var \MainBundle\Entity\Film
     */
    private $film;


    /**
     * Get id
     *
     * @return boolean 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Genre
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
     * Set film
     *
     * @param \MainBundle\Entity\Film $film
     * @return Genre
     */
    public function setFilm(\MainBundle\Entity\Film $film = null)
    {
        $this->film = $film;

        return $this;
    }

    /**
     * Get film
     *
     * @return \MainBundle\Entity\Film 
     */
    public function getFilm()
    {
        return $this->film;
    }
    /**
     * @var \MainBundle\Entity\Genre
     */
    private $genre;


    /**
     * Set genre
     *
     * @param \MainBundle\Entity\Genre $genre
     * @return Genre
     */
    public function setGenre(\MainBundle\Entity\Genre $genre = null)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return \MainBundle\Entity\Genre 
     */
    public function getGenre()
    {
        return $this->genre;
    }
}
