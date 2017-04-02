<?php

namespace NewsletterBundle\Controller;

use NewsletterBundle\Entity\Contact;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class DefaultController extends Controller
{
    public function indexAction($page)
    {
    	// Mais on sait qu'une page doit être supérieure ou égale à 1
	    if ($page < 1) {
	      // On déclenche une exception NotFoundHttpException, cela va afficher
	      // une page d'erreur 404 (qu'on pourra personnaliser plus tard d'ailleurs)
	      throw new NotFoundHttpException('Page "'.$page.'" inexistante.');
	    }

    	// On a donc accès au conteneur :

    	$mailer = $this->container->get('mailer'); 


    	// On récupère le service
	    $antispam = $this->get('newsletter.antispam');

	    // Je pars du principe que $text contient le texte d'un message quelconque
	    $text = '...';
	    if ($antispam->isSpam($text)) {
	      throw new Exception('Votre message a été détecté comme spam !');
	    }
    
    // Ici le message n'est pas un spam

	        // On ne sait pas combien de pages il y a


    	// Notre liste de campagnes

	    $listCampaigns = array(

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
			'listCampaigns' => $listCampaigns
		));
    }

    public function menuAction()
    {
    	// On fixe en dur une liste ici, bien entendu par la suite
	    // on la récupérera depuis la BDD !
	    $listCampaigns = array(
	      array('id' => 2, 'title' => 'Recherche développeur Symfony'),
	      array('id' => 5, 'title' => 'Mission de webmaster'),
	      array('id' => 9, 'title' => 'Offre de stage webdesigner')
	    );

    	return $this->render('NewsletterBundle:Default:menu.html.twig', array(
    		'listCampaigns' => $listCampaigns
    	));
    }

    public function viewAction($id)
	  {
	    $campaign = array(
	      'title'   => 'Recherche développpeur Symfony2',
	      'id'      => $id,
	      'author'  => 'Alexandre',
	      'content' => 'Nous recherchons un développeur Symfony2 débutant sur Lyon. Blabla…',
	      'date'    => new \Datetime()
	    );

	    return $this->render('NewsletterBundle:Default:view.html.twig', array(
	      'campaign' => $campaign
	    ));
	}

	public function editAction($id, Request $request)
	{

		$campaign = array(
		  'title'   => 'Recherche développpeur Symfony',
		  'id'      => $id,
		  'author'  => 'Alexandre',
		  'content' => 'Nous recherchons un développeur Symfony débutant sur Lyon. Blabla…',
		  'date'    => new \Datetime()
		);

		return $this->render('NewsletterBundle:Default:edit.html.twig', array(
		  'campaign' => $campaign
		));
	}

	public function addAction(Request $request)
	{
		// Création de l'entité
	    $contact = new Contact();
	    $contact->setEmail('bernard.pagoaga@gmail.com');
	    $contact->setType('C');
	    $contact->setActive(true);
	    $contact->setSite(1);

	    // on ne définit pas created_at qui est settée dans le constructeur
	    // On récupère l'EntityManager
	    $em = $this->getDoctrine()->getManager();

	    // Étape 1 : On « persiste » l'entité
	    $em->persist($contact);

		$contact2 = $em->getRepository('NewsletterBundle:Contact')->find(1);

		// On modifie cette annonce, en changeant la date à la date d'aujourd'hui
		$contact2->setUpdatedAt(New \DateTime('2017-03-21 22:00:00'));
	    // Étape 2 : On « flush » tout ce qui a été persisté avant
	    $em->flush();

		// Si la requête est en POST, c'est que le visiteur a soumis le formulaire
	    if ($request->isMethod('POST')) {
	      // Ici, on s'occupera de la création et de la gestion du formulaire

	      $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

	      // Puis on redirige vers la page de visualisation de cettte annonce
	      return $this->redirectToRoute('newsletter_view', array('id' => 5));
	    }


		return $this->render('NewsletterBundle:Default:add.html.twig');
	}

	public function deleteAction($id)
	{
		$campaign = array(
		  'title'   => 'Recherche développpeur Symfony',
		  'id'      => $id,
		  'author'  => 'Alexandre',
		  'content' => 'Nous recherchons un développeur Symfony débutant sur Lyon. Blabla…',
		  'date'    => new \Datetime()
		);
		return $this->render('NewsletterBundle:Default:delete.html.twig', array(
			'campaign' => $campaign));
	}
}
