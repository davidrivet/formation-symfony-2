<?php
namespace Formation\SampleDataServiceBundle\SampleDataModel;

class ExamMock {
  /** @var int */
  private $id;
  /** @var string */
  private $description;
  /** @var Array QuestionMock */
  private $questions;

    /**
     * Get the value of Description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of Description
     *
     * @param string description
     *
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get the value of Questions
     *
     * @return array
     */
    public function getQuestions()
    {
        return $this->questions;
    }

    /**
     * Set the value of Questions
     *
     * @param array questions
     *
     */
    public function setQuestions(array $questions)
    {
        $this->questions = $questions;
    }


    /**
     * Get the value of Id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Set the value of Id
     *
     * @param int id
     *
     */
    public function setId($id)
    {
        $this->id = $id;
    }

}
