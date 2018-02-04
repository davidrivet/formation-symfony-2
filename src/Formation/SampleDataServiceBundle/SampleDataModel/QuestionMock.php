<?php
namespace Formation\SampleDataServiceBundle\SampleDataModel;

class QuestionMock {

  /** @var string */
  private $wording;
  /** @var Array AnswerMock */
  private $answers;


    /**
     * Get the value of Wording
     *
     * @return string
     */
    public function getWording()
    {
        return $this->wording;
    }

    /**
     * Set the value of Wording
     *
     * @param string wording
     *
     */
    public function setWording($wording)
    {
        $this->wording = $wording;
    }

    /**
     * Get the value of Answers
     *
     * @return array
     */
    public function getAnswers()
    {
        return $this->answers;
    }

    /**
     * Set the value of Answers
     *
     * @param array answers
     *
     */
    public function setAnswers(array $answers)
    {
        $this->answers = $answers;
    }

    public function add(AnswerMock $answer) {
      if($answer->getIsCorrect()) {
        if($this->alreadyHasACorrectAnswer()) {
          echo "a correct answer is already specified for this question";
        } else {
          $this->answers[] = $answer;
        }
      } else {
        $this->answers[] = $answer;
      }
    }

    public function alreadyHasACorrectAnswer() {
      foreach ($this->answers as $answer) {
        if($answer->getIsCorrect()) {
          return true;
        }
      }
      return false;
    }

}
