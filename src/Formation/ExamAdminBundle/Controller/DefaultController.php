<?php

namespace Formation\ExamAdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FormationExamAdminBundle:Default:index.json.twig');
    }

    public function listExamsAction() {
        return new Response('The available exams will be listed here [admin mode].');
    }
}
