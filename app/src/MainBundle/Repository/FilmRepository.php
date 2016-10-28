<?php
namespace MainBundle\Entity;

use Doctrine\ORM\EntityRepository;

class FilmRepository extends EntityRepository

{

    public function findAnnonceByParametres($data)

    {

        $query = $this->createQueryBuilder('a');

        $query->where('a.anneeProduction BETWEEN :anneeProductionMin AND :anneeProductionMax')

            ->andWhere('a.kilometres BETWEEN :kilometresMin AND :kilometresMax')

            ->andWhere('a.prix BETWEEN :prixMin AND :prixMax')

            ->setParameters(array(

                'anneeProductionMin' => $data['annee_Production'],

                'anneeProductionMax' => $data['annee_Production_Max'],

                'kilometresMin' => $data['kilometres'],

                'kilometresMax' => $data['kilometres_Max'],

                'prixMin' => $data['prix'],

                'prixMax' => $data['prix_Max']));

// Si la recherche porte sur toutes les marques

        if($data['marque'] != '')

        {

            $query->andWhere('a.marque = :marque')

                ->setParameter('marque', $data['marque']);

        }

// Si la recherche porte sur tout les modèles

        if($data['modele'] != '')

        {

            $query->andWhere('a.modele = :modele')

                ->setParameter('modele', $data['modele']);

        }

// Si la recherche porte sur toutes les villes

        if($data['ville'] != '')

        {

            $query->andWhere('a.ville = :ville')

                ->setParameter('ville', $data['ville']);

        }

// Si la recherche porte sur tout les types de transmission

        if($data['transmission'] != '')

        {

            $query->andWhere('a.transmission = :transmission')

                ->setParameter('transmission', $data['transmission']);

        }

        return $query->getQuery()->getResult();

    }

}