<?php

namespace TestEveBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TestEveBundle:Default:index.html.twig');
    }
}
