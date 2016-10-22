<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $movies = $this->getDoctrine()->getRepository('MainBundle:Film');
        $movies = $movies->findAll();

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate($movies, $request->query->getInt('page', 1), 25);

        dump($movies);

        return $this->render('MainBundle:Default:index.html.twig', array(
            'movies' => $pagination,
        ));
    }
}
