<?php

namespace Tipddy\SurveyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	$name = "Osvaldo";
        return $this->render('TipddySurveyBundle:Default:index.html.twig', array('name' => $name));
    }
}