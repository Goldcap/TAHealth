<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Presentation
 *
 * @ORM\Table(name="presentation", indexes={@ORM\Index(name="event", columns={"fk_event_id"})})
 * @ORM\Entity
 */
class Presentation
{
    /**
     * @var string
     *
     * @ORM\Column(name="presentation_name", type="string", length=255, nullable=true)
     */
    private $presentationName;

    /**
     * @var integer
     *
     * @ORM\Column(name="fk_event_id", type="integer", nullable=true)
     */
    private $fkEventId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="presentation_start_date", type="datetime", nullable=true)
     */
    private $presentationStartDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="presentation_end_date", type="datetime", nullable=true)
     */
    private $presentationEndDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="presentation_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $presentationId;



    /**
     * Set presentationName
     *
     * @param string $presentationName
     * @return Presentation
     */
    public function setPresentationName($presentationName)
    {
        $this->presentationName = $presentationName;

        return $this;
    }

    /**
     * Get presentationName
     *
     * @return string 
     */
    public function getPresentationName()
    {
        return $this->presentationName;
    }

    /**
     * Set fkEventId
     *
     * @param integer $fkEventId
     * @return Presentation
     */
    public function setFkEventId($fkEventId)
    {
        $this->fkEventId = $fkEventId;

        return $this;
    }

    /**
     * Get fkEventId
     *
     * @return integer 
     */
    public function getFkEventId()
    {
        return $this->fkEventId;
    }

    /**
     * Set presentationStartDate
     *
     * @param \DateTime $presentationStartDate
     * @return Presentation
     */
    public function setPresentationStartDate($presentationStartDate)
    {
        $this->presentationStartDate = $presentationStartDate;

        return $this;
    }

    /**
     * Get presentationStartDate
     *
     * @return \DateTime 
     */
    public function getPresentationStartDate()
    {
        return $this->presentationStartDate;
    }

    /**
     * Set presentationEndDate
     *
     * @param \DateTime $presentationEndDate
     * @return Presentation
     */
    public function setPresentationEndDate($presentationEndDate)
    {
        $this->presentationEndDate = $presentationEndDate;

        return $this;
    }

    /**
     * Get presentationEndDate
     *
     * @return \DateTime 
     */
    public function getPresentationEndDate()
    {
        return $this->presentationEndDate;
    }

    /**
     * Get presentationId
     *
     * @return integer 
     */
    public function getPresentationId()
    {
        return $this->presentationId;
    }
}
