<?php
namespace Formation\SampleDataServiceBundle\SampleDataModel;

class AnswerMock {

  /** @var int */
  private $rank;
  /** @var string */
  private $wording;
  /** @var boolean */
  private $isCorrect;


    /**
     * Get the value of Rank
     *
     * @return int
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Set the value of Rank
     *
     * @param int rank
     *
     */
    public function setRank($rank)
    {
        $this->rank = $rank;
    }

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
     * Get the value of Is Correct
     *
     * @return boolean
     */
    public function getIsCorrect()
    {
        return $this->isCorrect;
    }

    /**
     * Set the value of Is Correct
     *
     * @param boolean isCorrect
     *
     */
    public function setIsCorrect($isCorrect)
    {
        $this->isCorrect = $isCorrect;
    }

}
