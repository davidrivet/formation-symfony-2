<?php

namespace Formation\ExamBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FormationExamBundle:Default:index.html.twig');
    }
}
