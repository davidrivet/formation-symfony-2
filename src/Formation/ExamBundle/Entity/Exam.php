<?php

namespace Formation\ExamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Exam
 *
 * @ORM\Table(name="exam")
 * @ORM\Entity(repositoryClass="Formation\ExamBundle\Repository\ExamRepository")
 */
class Exam
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, unique=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="difficulty", type="integer", nullable=false, options={"default":10})
     */
    private $difficulty;

    /**
    * @ORM\OneToMany(targetEntity="Formation\ExamBundle\Entity\Question", mappedBy="exam")
    */
    private $questions;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Exam
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set difficulty
     *
     * @param integer $difficulty
     *
     * @return Exam
     */
    public function setDifficulty($difficulty)
    {
        $this->difficulty = $difficulty;

        return $this;
    }

    /**
     * Get difficulty
     *
     * @return integer
     */
    public function getDifficulty()
    {
        return $this->difficulty;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->questions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add question
     *
     * @param \Formation\ExamBundle\Entity\Question $question
     *
     * @return Exam
     */
    public function addQuestion(\Formation\ExamBundle\Entity\Question $question)
    {
        $this->questions[] = $question;

        // * ajout de la référence de l'exam dans la question
        $question->setExam($this);

        return $this;
    }

    /**
     * Remove question
     *
     * @param \Formation\ExamBundle\Entity\Question $question
     */
    public function removeQuestion(\Formation\ExamBundle\Entity\Question $question)
    {
        $this->questions->removeElement($question);
    }

    /**
     * Get questions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getQuestions()
    {
        return $this->questions;
    }
}
