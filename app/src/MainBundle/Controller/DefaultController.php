<?php

namespace MainBundle\Controller;

use MainBundle\Form\FilmType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $movies = $this->getDoctrine()->getRepository('MainBundle:Film');
        $movies = $movies->findAll();

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($movies, $request->query->getInt('page', 1), 25);

        $form = $this->createForm(FilmType::class);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $data = $request->get('mainbundle_film');


            $em = $this->getDoctrine()->getManager();
            $movies = $em->getRepository('MainBundle:Film')
                ->findFilmByFilter($data);

            $pagination = $paginator->paginate($movies, $request->query->getInt('page', 1), 25);

            return $this->render('MainBundle:Default:index.html.twig', array(
                'movies' => $pagination,
                'form' => $form->createView()
            ));
        }

        return $this->render('MainBundle:Default:index.html.twig', array(
            'movies' => $pagination,
            'form' => $form->createView()
        ));
    }
}
