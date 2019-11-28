<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\HttpFoundation\Request;
use TestEveBundle\Event\TestEvent;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ]);
    }
    
    /**
     * @Route("/testEvent", name="testeventpage")
     */
    public function testEventAction(Request $request)
    {
    	$event = new TestEvent();
    	$event->setUrl("monOfferUrl");
    	
    	// le dispatcher est un service symfony qui envoie l'event
    	$eventDispatcher = new EventDispatcher();
    	$eventDispatcher->dispatch('testevent.testevent', $event);

    	return $this->render('default/index.html.twig', [
    			'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
    	]);
    }
}
