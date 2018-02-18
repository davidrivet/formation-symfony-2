<?php

// src/Formation/ExamBundle/DataFixtures/ORM/LoadExams.php


namespace Formation\ExamBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Formation\ExamBundle\Entity\Exam;
//use Formation\ExamBundle\Entity\Question;
//use Formation\ExamBundle\Entity\Answer;


class LoadExams implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Liste des noms/descriptions d'examens à ajouter
    $exams = array(
      'Les capitales du monde [5]',
      'Les animaux d\'Afrique [3]',
      'Les m&eacute;taux [3]',
      'Math&eacute;matiques [5]'
    );

    foreach (exams as $exam) {
      // On crée l'examen
      $exam_ = new Exam();
      $exam_->setDescription($exam);

      // On la persiste
      $manager->persist($exam_);
    }

    // On déclenche l'enregistrement de tous les examens
    $manager->flush();
  }
}
