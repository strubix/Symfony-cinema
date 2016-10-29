<?php

namespace MainBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * FilmRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class FilmRepository extends EntityRepository
{
    /**
     * Recherche de films en fonction de filtres définis
     * @param $data
     * @return array
     */
    public function findFilmByFilter($data)
    {
        $qb = $this->createQueryBuilder('a');

        if ($data['titre'] != '') {
            $qb
                ->andWhere('a.titre LIKE :titre')
                ->setParameter('titre', '%' . $data['titre'] . '%')
            ;
        }
        if ($data['anneeProd'] != '') {
            $qb
                ->andWhere('a.anneeProd = :anneeProd')
                ->setParameter('anneeProd', $data['anneeProd'])
            ;
        }
        if ($data['genre'] != '') {
            $qb
                ->andWhere('a.genre = :genre')
                ->setParameter('genre', $data['genre'])
            ;
        }

        return $qb->getQuery()->getResult();
    }
}
