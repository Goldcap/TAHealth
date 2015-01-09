<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WtvrMessageRecipient
 *
 * @ORM\Table(name="wtvr_message_recipient", indexes={@ORM\Index(name="fk_circle_message_id", columns={"fk_wtvr_message_id"})})
 * @ORM\Entity
 */
class WtvrMessageRecipient
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fk_wtvr_message_id", type="integer", nullable=true)
     */
    private $fkWtvrMessageId;

    /**
     * @var string
     *
     * @ORM\Column(name="wtvr_message_recipient_email", type="string", length=255, nullable=true)
     */
    private $wtvrMessageRecipientEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="wtvr_message_recipient_fname", type="string", length=50, nullable=true)
     */
    private $wtvrMessageRecipientFname;

    /**
     * @var string
     *
     * @ORM\Column(name="wtvr_message_recipient_lname", type="string", length=50, nullable=true)
     */
    private $wtvrMessageRecipientLname;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="wtvr_message_recipient_date_added", type="datetime", nullable=true)
     */
    private $wtvrMessageRecipientDateAdded;

    /**
     * @var integer
     *
     * @ORM\Column(name="wtvr_message_recipient__id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $wtvrMessageRecipientId;



    /**
     * Set fkWtvrMessageId
     *
     * @param integer $fkWtvrMessageId
     * @return WtvrMessageRecipient
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
     * Set wtvrMessageRecipientEmail
     *
     * @param string $wtvrMessageRecipientEmail
     * @return WtvrMessageRecipient
     */
    public function setWtvrMessageRecipientEmail($wtvrMessageRecipientEmail)
    {
        $this->wtvrMessageRecipientEmail = $wtvrMessageRecipientEmail;

        return $this;
    }

    /**
     * Get wtvrMessageRecipientEmail
     *
     * @return string 
     */
    public function getWtvrMessageRecipientEmail()
    {
        return $this->wtvrMessageRecipientEmail;
    }

    /**
     * Set wtvrMessageRecipientFname
     *
     * @param string $wtvrMessageRecipientFname
     * @return WtvrMessageRecipient
     */
    public function setWtvrMessageRecipientFname($wtvrMessageRecipientFname)
    {
        $this->wtvrMessageRecipientFname = $wtvrMessageRecipientFname;

        return $this;
    }

    /**
     * Get wtvrMessageRecipientFname
     *
     * @return string 
     */
    public function getWtvrMessageRecipientFname()
    {
        return $this->wtvrMessageRecipientFname;
    }

    /**
     * Set wtvrMessageRecipientLname
     *
     * @param string $wtvrMessageRecipientLname
     * @return WtvrMessageRecipient
     */
    public function setWtvrMessageRecipientLname($wtvrMessageRecipientLname)
    {
        $this->wtvrMessageRecipientLname = $wtvrMessageRecipientLname;

        return $this;
    }

    /**
     * Get wtvrMessageRecipientLname
     *
     * @return string 
     */
    public function getWtvrMessageRecipientLname()
    {
        return $this->wtvrMessageRecipientLname;
    }

    /**
     * Set wtvrMessageRecipientDateAdded
     *
     * @param \DateTime $wtvrMessageRecipientDateAdded
     * @return WtvrMessageRecipient
     */
    public function setWtvrMessageRecipientDateAdded($wtvrMessageRecipientDateAdded)
    {
        $this->wtvrMessageRecipientDateAdded = $wtvrMessageRecipientDateAdded;

        return $this;
    }

    /**
     * Get wtvrMessageRecipientDateAdded
     *
     * @return \DateTime 
     */
    public function getWtvrMessageRecipientDateAdded()
    {
        return $this->wtvrMessageRecipientDateAdded;
    }

    /**
     * Get wtvrMessageRecipientId
     *
     * @return integer 
     */
    public function getWtvrMessageRecipientId()
    {
        return $this->wtvrMessageRecipientId;
    }
}
