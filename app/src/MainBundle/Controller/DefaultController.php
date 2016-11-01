<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {

        $em = $this->getDoctrine()->getManager();
        $films = $em->getRepository('MainBundle:Film')->findLastFilms();

        return $this->render('MainBundle:Default:index.html.twig',
            array(
                'films' => $films
            ));
    }
}
