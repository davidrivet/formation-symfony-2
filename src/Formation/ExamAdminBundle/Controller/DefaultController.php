<?php

namespace Formation\ExamAdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FormationExamAdminBundle:Default:index.html.twig');
    }
}
