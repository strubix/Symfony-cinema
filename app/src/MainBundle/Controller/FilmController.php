<?php

namespace MainBundle\Controller;

use MainBundle\Entity\Film;
use MainBundle\Form\FilmType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


/**
 * Film controller.
 *
 */
class FilmController extends Controller
{
    /**
     * Lists all film entities.
     *
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $movies = $this->getDoctrine()->getRepository('MainBundle:Film')->findAll();

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($movies, $request->query->getInt('page', 1), 25);

        $form = $this->createForm(FilmType::class);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $data = $request->get('mainbundle_film');


            $em = $this->getDoctrine()->getManager();
            $movies = $em->getRepository('MainBundle:Film')->findFilmByFilter($data);

            $pagination = $paginator->paginate($movies, $request->query->getInt('page', 1), 25);

            return $this->render('film/index.html.twig',
                array(
                    'movies' => $pagination,
                    'form' => $form->createView()
                ));
        }

        return $this->render('film/index.html.twig',
            array(
                'movies' => $pagination,
                'form' => $form->createView()
            ));
    }

    /**
     * Finds and displays a film entity.
     *
     * @param Film $film
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction(Film $film)
    {

        return $this->render('film/show.html.twig', array(
            'film' => $film,
        ));
    }
}
