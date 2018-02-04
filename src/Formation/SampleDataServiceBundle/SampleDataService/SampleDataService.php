<?php
namespace Formation\SampleDataServiceBundle\SampleDataService;

use Formation\SampleDataServiceBundle\SampleDataModel\ExamMock;
use Formation\SampleDataServiceBundle\SampleDataModel\QuestionMock;
use Formation\SampleDataServiceBundle\SampleDataModel\AnswerMock;
use Symfony\Component\Finder\Finder;

class SampleDataService {

  /**
  * returns an array of fake exams for test purposes
  */
  public function getSampleExams() {

    $finder = new Finder();
    $finder->files()->in(__DIR__)->name("data.json");
    $data = "no data";
    foreach ($finder as $file) {
      if($file->getFileName() == "data.json") {
        $data = $file->getContents();
      }
    }

    $data_json = json_decode($data);

    $result = array();

    foreach ($data_json as $exams) {
      foreach ($exams as $exams) {
        $examMock = new ExamMock();
        $examMock->setId($exams->id);
        $examMock->setDescription($exams->description);
        $questions = array();
        foreach ($exams->questions as $question) {
          $questionMock = new QuestionMock();
          $questionMock->setWording($question->wording);
          $answers = array();
          foreach ($question->answers as $answer) {
            $answerMock = new AnswerMock();
            $answerMock->setWording($answer->wording);
            $answerMock->setRank($answer->rank);
            $answerMock->setIsCorrect($answer->isCorrect);
            $answers[] = $answerMock;
          }
          $questionMock->setAnswers($answers);
          $questions[] = $questionMock;
        }
        $examMock->setQuestions($questions);
        $result[] = $examMock;
      }
    }

    return $result;
  }
}
