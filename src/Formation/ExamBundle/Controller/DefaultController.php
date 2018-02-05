<?php

namespace Formation\ExamBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        // * affichage initial
        //return $this->render('FormationExamBundle:Default:index.html.twig');
        // * redirection vers la route /exams/list
        // * tp-step-12
        return $this->redirectToRoute('formation_exam_examslist');
    }

    public function listExamsAction() {
        // * reponse initiale
        // * mauvaise pratique, transgression du principe mvc
        // * préférer l'utilisation de templates
        //return new Response('The available exams will be listed here.');

        $sampleExams = $this->getSampleExams();

        return $this->render("FormationExamBundle:Default:examsList.html.twig", array("exams"=>$sampleExams));
    }

    /**
     * @Route("/exam/{id}/desc", requirements={"id" = "\d+"}, defaults={"id" = 1}, name="formation_exam_desc")
     */
    public function showExamDescriptionAction($id) {
        return new Response("Description of the exam $id will be put here.");
    }

    /**
    * shortcut to the mock data service
    */
    private function getSampleExams() {
      // * recuperation des donnees de test via le service cree pour
      return $this->get('formation.sampledataservice')->getSampleExams();
    }
}
