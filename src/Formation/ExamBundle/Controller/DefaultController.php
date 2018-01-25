<?php

namespace Formation\ExamBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
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

    /**
     * @Route("/exam/{id}/desc", requirements={"id" = "\d+"}, defaults={"id" = 1}, name="description")
     */
    public function showExamDescriptionAction($id) {
        return new Response("Description of the exam $id will be put here.");
    }
}
