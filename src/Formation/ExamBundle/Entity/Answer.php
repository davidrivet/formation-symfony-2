<?php

namespace Formation\ExamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Answer
 *
 * @ORM\Table(name="answer")
 * @ORM\Entity(repositoryClass="Formation\ExamBundle\Repository\AnswerRepository")
 */
class Answer
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
     * @var int
     *
     * @ORM\Column(name="rank", type="integer")
     */
    private $rank;

    /**
     * @var string
     *
     * @ORM\Column(name="wording", type="string", length=255)
     */
    private $wording;

    /**
     * @var bool
     *
     * @ORM\Column(name="isCorrect", type="boolean")
     */
    private $isCorrect;

    /**
     * @ORM\ManyToOne(targetEntity="Formation\ExamBundle\Entity\Question", inversedBy="answers")
     * @ORM\JoinColumn(nullable=false)
     */
    private $question;


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
     * Set rank
     *
     * @param integer $rank
     *
     * @return Answer
     */
    public function setRank($rank)
    {
        $this->rank = $rank;

        return $this;
    }

    /**
     * Get rank
     *
     * @return int
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Set wording
     *
     * @param string $wording
     *
     * @return Answer
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
     * Set isCorrect
     *
     * @param boolean $isCorrect
     *
     * @return Answer
     */
    public function setIsCorrect($isCorrect)
    {
        $this->isCorrect = $isCorrect;

        return $this;
    }

    /**
     * Get isCorrect
     *
     * @return bool
     */
    public function getIsCorrect()
    {
        return $this->isCorrect;
    }

    /**
     * Set question
     *
     * @param \Formation\ExamBundle\Entity\Question $question
     *
     * @return Answer
     */
    public function setQuestion(\Formation\ExamBundle\Entity\Question $question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return \Formation\ExamBundle\Entity\Question
     */
    public function getQuestion()
    {
        return $this->question;
    }
}
