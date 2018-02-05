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
        //return $this->redirectToRoute('formation_exam_examslist');
        // * tp-step-15
        // * la valeur passee en parametre sera transmise dans la partie variable,
        // * l'élément dynamique de la route
        return $this->redirectToRoute('formation_exam_desc', array("id" => 2 ));
        // * modifier le nom du parametre pour voir comment l'information est
        // * passee si non reconnue comme un element dynamique de la route
        //return $this->redirectToRoute('formation_exam_desc', array("identifiant" => 2 ));
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
        // * affichage initial
        //return new Response("Description of the exam $id will be put here.");

        $sampleExams = $this->getSampleExams();

        return $this->render("FormationExamBundle:Default:examDesc.html.twig", array("exams"=>$sampleExams, "requestedId" => $id));
    }

    /**
    * shortcut to the mock data service
    */
    private function getSampleExams() {
      // * recuperation des donnees de test via le service cree pour
      return $this->get('formation.sampledataservice')->getSampleExams();
    }
}
