<?php

namespace Acme\CSUN\NSOBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeCSUNNSOBundle:Default:index.html.twig', array('name' => $name));
    }
}
