<?php

namespace Formation\ExamBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FormationExamBundle:Default:index.html.twig');
    }

    public function listExamsAction() {
        return new Response('The available exams will be listed here.');
    }
}
