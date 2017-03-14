<?php

namespace CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CoreBundle:Default:index.html.twig');
    }

    public function contactAction(Request $request)
    {
    	$request->getSession()->getFlashBag()->add('notice', 'La page de contact n\'existe pas encore.');

		// Puis on redirige vers la page de visualisation de cettte annonce
		return $this->redirectToRoute('core_homepage');

    }
}
