<?php

namespace NewsletterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {

    	// Notre liste d'annonce en dur

	    $listAdverts = array(

	      array(

	        'title'   => 'Recherche développpeur Symfony',

	        'id'      => 1,

	        'author'  => 'Alexandre',

	        'content' => 'Nous recherchons un développeur Symfony débutant sur Lyon. Blabla…',

	        'date'    => new \Datetime()),

	      array(

	        'title'   => 'Mission de webmaster',

	        'id'      => 2,

	        'author'  => 'Hugo',

	        'content' => 'Nous recherchons un webmaster capable de maintenir notre site internet. Blabla…',

	        'date'    => new \Datetime()),

	      array(

	        'title'   => 'Offre de stage webdesigner',

	        'id'      => 3,

	        'author'  => 'Mathieu',

	        'content' => 'Nous proposons un poste pour webdesigner. Blabla…',

	        'date'    => new \Datetime())

	    );

        return $this->render('NewsletterBundle:Default:index.html.twig', array(
			'listAdverts' => $listAdverts
		));
    }

    public function menuAction()
    {
    	// On fixe en dur une liste ici, bien entendu par la suite
	    // on la récupérera depuis la BDD !
	    $listAdverts = array(
	      array('id' => 2, 'title' => 'Recherche développeur Symfony'),
	      array('id' => 5, 'title' => 'Mission de webmaster'),
	      array('id' => 9, 'title' => 'Offre de stage webdesigner')
	    );

    	return $this->render('NewsletterBundle:Default:menu.html.twig', array(
    		'listAdverts' => $listAdverts
    	));
    }
}
