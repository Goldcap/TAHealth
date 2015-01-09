<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Event
 *
 * @ORM\Table(name="event", indexes={@ORM\Index(name="sponsor", columns={"fk_sponsor_id"})})
 * @ORM\Entity
 */
class Event
{
    /**
     * @var string
     *
     * @ORM\Column(name="event_name", type="string", length=255, nullable=true)
     */
    private $eventName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="event_start_date", type="datetime", nullable=true)
     */
    private $eventStartDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="event_end_date", type="datetime", nullable=true)
     */
    private $eventEndDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="fk_sponsor_id", type="integer", nullable=true)
     */
    private $fkSponsorId;

    /**
     * @var integer
     *
     * @ORM\Column(name="event_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $eventId;



    /**
     * Set eventName
     *
     * @param string $eventName
     * @return Event
     */
    public function setEventName($eventName)
    {
        $this->eventName = $eventName;

        return $this;
    }

    /**
     * Get eventName
     *
     * @return string 
     */
    public function getEventName()
    {
        return $this->eventName;
    }

    /**
     * Set eventStartDate
     *
     * @param \DateTime $eventStartDate
     * @return Event
     */
    public function setEventStartDate($eventStartDate)
    {
        $this->eventStartDate = $eventStartDate;

        return $this;
    }

    /**
     * Get eventStartDate
     *
     * @return \DateTime 
     */
    public function getEventStartDate()
    {
        return $this->eventStartDate;
    }

    /**
     * Set eventEndDate
     *
     * @param \DateTime $eventEndDate
     * @return Event
     */
    public function setEventEndDate($eventEndDate)
    {
        $this->eventEndDate = $eventEndDate;

        return $this;
    }

    /**
     * Get eventEndDate
     *
     * @return \DateTime 
     */
    public function getEventEndDate()
    {
        return $this->eventEndDate;
    }

    /**
     * Set fkSponsorId
     *
     * @param integer $fkSponsorId
     * @return Event
     */
    public function setFkSponsorId($fkSponsorId)
    {
        $this->fkSponsorId = $fkSponsorId;

        return $this;
    }

    /**
     * Get fkSponsorId
     *
     * @return integer 
     */
    public function getFkSponsorId()
    {
        return $this->fkSponsorId;
    }

    /**
     * Get eventId
     *
     * @return integer 
     */
    public function getEventId()
    {
        return $this->eventId;
    }
}
