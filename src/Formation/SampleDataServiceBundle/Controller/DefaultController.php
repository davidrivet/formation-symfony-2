<?php

namespace Formation\SampleDataServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FormationSampleDataServiceBundle:Default:index.html.twig');
    }
}
