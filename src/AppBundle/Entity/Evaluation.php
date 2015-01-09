<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evaluation
 *
 * @ORM\Table(name="evaluation", indexes={@ORM\Index(name="location", columns={"fk_location_id"}), @ORM\Index(name="presentation", columns={"fk_presentation_id"}), @ORM\Index(name="user", columns={"fk_user_id"})})
 * @ORM\Entity
 */
class Evaluation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fk_location_id", type="integer", nullable=true)
     */
    private $fkLocationId;

    /**
     * @var integer
     *
     * @ORM\Column(name="fk_presentation_id", type="integer", nullable=true)
     */
    private $fkPresentationId;

    /**
     * @var integer
     *
     * @ORM\Column(name="fk_user_id", type="integer", nullable=true)
     */
    private $fkUserId;

    /**
     * @var string
     *
     * @ORM\Column(name="evaluation_question", type="string", length=255, nullable=true)
     */
    private $evaluationQuestion;

    /**
     * @var integer
     *
     * @ORM\Column(name="evaluation_grade", type="integer", nullable=true)
     */
    private $evaluationGrade;

    /**
     * @var integer
     *
     * @ORM\Column(name="evaluation_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $evaluationId;



    /**
     * Set fkLocationId
     *
     * @param integer $fkLocationId
     * @return Evaluation
     */
    public function setFkLocationId($fkLocationId)
    {
        $this->fkLocationId = $fkLocationId;

        return $this;
    }

    /**
     * Get fkLocationId
     *
     * @return integer 
     */
    public function getFkLocationId()
    {
        return $this->fkLocationId;
    }

    /**
     * Set fkPresentationId
     *
     * @param integer $fkPresentationId
     * @return Evaluation
     */
    public function setFkPresentationId($fkPresentationId)
    {
        $this->fkPresentationId = $fkPresentationId;

        return $this;
    }

    /**
     * Get fkPresentationId
     *
     * @return integer 
     */
    public function getFkPresentationId()
    {
        return $this->fkPresentationId;
    }

    /**
     * Set fkUserId
     *
     * @param integer $fkUserId
     * @return Evaluation
     */
    public function setFkUserId($fkUserId)
    {
        $this->fkUserId = $fkUserId;

        return $this;
    }

    /**
     * Get fkUserId
     *
     * @return integer 
     */
    public function getFkUserId()
    {
        return $this->fkUserId;
    }

    /**
     * Set evaluationQuestion
     *
     * @param string $evaluationQuestion
     * @return Evaluation
     */
    public function setEvaluationQuestion($evaluationQuestion)
    {
        $this->evaluationQuestion = $evaluationQuestion;

        return $this;
    }

    /**
     * Get evaluationQuestion
     *
     * @return string 
     */
    public function getEvaluationQuestion()
    {
        return $this->evaluationQuestion;
    }

    /**
     * Set evaluationGrade
     *
     * @param integer $evaluationGrade
     * @return Evaluation
     */
    public function setEvaluationGrade($evaluationGrade)
    {
        $this->evaluationGrade = $evaluationGrade;

        return $this;
    }

    /**
     * Get evaluationGrade
     *
     * @return integer 
     */
    public function getEvaluationGrade()
    {
        return $this->evaluationGrade;
    }

    /**
     * Get evaluationId
     *
     * @return integer 
     */
    public function getEvaluationId()
    {
        return $this->evaluationId;
    }
}
