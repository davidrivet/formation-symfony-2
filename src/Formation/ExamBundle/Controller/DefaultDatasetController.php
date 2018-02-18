<?php
namespace Formation\ExamBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultDatasetController extends Controller
{
  public function addDefaultDatasetAction() {
    $em = $this->getDoctrine()->getManager();
    $exam = new Exam();
    $exam->setDescription("My exam description, another");
    $exam->setDifficulty(10);
    $em->persist($exam);
    $em->flush();
    return new Response("Default exams correctly added.");
    // * TODO to complete
  }
}
