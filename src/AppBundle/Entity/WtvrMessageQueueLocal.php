<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WtvrMessageQueueLocal
 *
 * @ORM\Table(name="wtvr_message_queue_local")
 * @ORM\Entity
 */
class WtvrMessageQueueLocal
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fk_wtvr_message_id", type="integer", nullable=true)
     */
    private $fkWtvrMessageId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="wtvr_message_queue_local_date_added", type="datetime", nullable=true)
     */
    private $wtvrMessageQueueLocalDateAdded;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="wtvr_message_queue_local_date_sent", type="datetime", nullable=true)
     */
    private $wtvrMessageQueueLocalDateSent;

    /**
     * @var integer
     *
     * @ORM\Column(name="wtvr_message_queue_local_bad_recipients", type="integer", nullable=true)
     */
    private $wtvrMessageQueueLocalBadRecipients;

    /**
     * @var integer
     *
     * @ORM\Column(name="wtvr_message_queue_local_unsubscribed_recipients", type="integer", nullable=true)
     */
    private $wtvrMessageQueueLocalUnsubscribedRecipients;

    /**
     * @var integer
     *
     * @ORM\Column(name="wtvr_message_queue_local_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $wtvrMessageQueueLocalId;



    /**
     * Set fkWtvrMessageId
     *
     * @param integer $fkWtvrMessageId
     * @return WtvrMessageQueueLocal
     */
    public function setFkWtvrMessageId($fkWtvrMessageId)
    {
        $this->fkWtvrMessageId = $fkWtvrMessageId;

        return $this;
    }

    /**
     * Get fkWtvrMessageId
     *
     * @return integer 
     */
    public function getFkWtvrMessageId()
    {
        return $this->fkWtvrMessageId;
    }

    /**
     * Set wtvrMessageQueueLocalDateAdded
     *
     * @param \DateTime $wtvrMessageQueueLocalDateAdded
     * @return WtvrMessageQueueLocal
     */
    public function setWtvrMessageQueueLocalDateAdded($wtvrMessageQueueLocalDateAdded)
    {
        $this->wtvrMessageQueueLocalDateAdded = $wtvrMessageQueueLocalDateAdded;

        return $this;
    }

    /**
     * Get wtvrMessageQueueLocalDateAdded
     *
     * @return \DateTime 
     */
    public function getWtvrMessageQueueLocalDateAdded()
    {
        return $this->wtvrMessageQueueLocalDateAdded;
    }

    /**
     * Set wtvrMessageQueueLocalDateSent
     *
     * @param \DateTime $wtvrMessageQueueLocalDateSent
     * @return WtvrMessageQueueLocal
     */
    public function setWtvrMessageQueueLocalDateSent($wtvrMessageQueueLocalDateSent)
    {
        $this->wtvrMessageQueueLocalDateSent = $wtvrMessageQueueLocalDateSent;

        return $this;
    }

    /**
     * Get wtvrMessageQueueLocalDateSent
     *
     * @return \DateTime 
     */
    public function getWtvrMessageQueueLocalDateSent()
    {
        return $this->wtvrMessageQueueLocalDateSent;
    }

    /**
     * Set wtvrMessageQueueLocalBadRecipients
     *
     * @param integer $wtvrMessageQueueLocalBadRecipients
     * @return WtvrMessageQueueLocal
     */
    public function setWtvrMessageQueueLocalBadRecipients($wtvrMessageQueueLocalBadRecipients)
    {
        $this->wtvrMessageQueueLocalBadRecipients = $wtvrMessageQueueLocalBadRecipients;

        return $this;
    }

    /**
     * Get wtvrMessageQueueLocalBadRecipients
     *
     * @return integer 
     */
    public function getWtvrMessageQueueLocalBadRecipients()
    {
        return $this->wtvrMessageQueueLocalBadRecipients;
    }

    /**
     * Set wtvrMessageQueueLocalUnsubscribedRecipients
     *
     * @param integer $wtvrMessageQueueLocalUnsubscribedRecipients
     * @return WtvrMessageQueueLocal
     */
    public function setWtvrMessageQueueLocalUnsubscribedRecipients($wtvrMessageQueueLocalUnsubscribedRecipients)
    {
        $this->wtvrMessageQueueLocalUnsubscribedRecipients = $wtvrMessageQueueLocalUnsubscribedRecipients;

        return $this;
    }

    /**
     * Get wtvrMessageQueueLocalUnsubscribedRecipients
     *
     * @return integer 
     */
    public function getWtvrMessageQueueLocalUnsubscribedRecipients()
    {
        return $this->wtvrMessageQueueLocalUnsubscribedRecipients;
    }

    /**
     * Get wtvrMessageQueueLocalId
     *
     * @return integer 
     */
    public function getWtvrMessageQueueLocalId()
    {
        return $this->wtvrMessageQueueLocalId;
    }
}
