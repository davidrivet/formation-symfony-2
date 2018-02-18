<?php

namespace Formation\ExamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table(name="question")
 * @ORM\Entity(repositoryClass="Formation\ExamBundle\Repository\QuestionRepository")
 */
class Question
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
     * @ORM\Column(name="wording", type="string", length=255)
     */
    private $wording;

    /**
     * @ORM\ManyToOne(targetEntity="Formation\ExamBundle\Entity\Exam", inversedBy="questions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $exam;

    /**
    * @ORM\OneToMany(targetEntity="Formation\ExamBundle\Entity\Question", mappedBy="question")
    */
    private $answers;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set wording
     *
     * @param string $wording
     *
     * @return Question
     */
    public function setWording($wording)
    {
        $this->wording = $wording;

        return $this;
    }

    /**
     * Get wording
     *
     * @return string
     */
    public function getWording()
    {
        return $this->wording;
    }

    /**
     * Set exam
     *
     * @param \Formation\ExamBundle\Entity\Exam $exam
     *
     * @return Question
     */
    public function setExam(\Formation\ExamBundle\Entity\Exam $exam)
    {
        $this->exam = $exam;

        return $this;
    }

    /**
     * Get exam
     *
     * @return \Formation\ExamBundle\Entity\Exam
     */
    public function getExam()
    {
        return $this->exam;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->answers = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add answer
     *
     * @param \Formation\ExamBundle\Entity\Question $answer
     *
     * @return Question
     */
    public function addAnswer(\Formation\ExamBundle\Entity\Question $answer)
    {
        $this->answers[] = $answer;

        // * ajout de la référence vers question dans answer
        $answer->setQuestion($this);

        return $this;
    }

    /**
     * Remove answer
     *
     * @param \Formation\ExamBundle\Entity\Question $answer
     */
    public function removeAnswer(\Formation\ExamBundle\Entity\Question $answer)
    {
        $this->answers->removeElement($answer);
    }

    /**
     * Get answers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAnswers()
    {
        return $this->answers;
    }
}
