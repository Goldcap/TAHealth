<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WtvrMessageQueueGlobal
 *
 * @ORM\Table(name="wtvr_message_queue_global")
 * @ORM\Entity
 */
class WtvrMessageQueueGlobal
{
    /**
     * @var string
     *
     * @ORM\Column(name="wtvr_message_recipient", type="string", length=255, nullable=true)
     */
    private $wtvrMessageRecipient;

    /**
     * @var string
     *
     * @ORM\Column(name="wtvr_message_sender", type="string", length=255, nullable=true)
     */
    private $wtvrMessageSender;

    /**
     * @var string
     *
     * @ORM\Column(name="wtvr_message_recipient_fname", type="string", length=255, nullable=true)
     */
    private $wtvrMessageRecipientFname;

    /**
     * @var string
     *
     * @ORM\Column(name="wtvr_message_recipient_lname", type="string", length=255, nullable=true)
     */
    private $wtvrMessageRecipientLname;

    /**
     * @var string
     *
     * @ORM\Column(name="wtvr_message_sender_fname", type="string", length=255, nullable=true)
     */
    private $wtvrMessageSenderFname;

    /**
     * @var string
     *
     * @ORM\Column(name="wtvr_message_sender_lname", type="string", length=255, nullable=true)
     */
    private $wtvrMessageSenderLname;

    /**
     * @var string
     *
     * @ORM\Column(name="wtvr_message_subject", type="string", length=255, nullable=true)
     */
    private $wtvrMessageSubject;

    /**
     * @var string
     *
     * @ORM\Column(name="wtvr_message_body", type="text", length=65535, nullable=true)
     */
    private $wtvrMessageBody;

    /**
     * @var string
     *
     * @ORM\Column(name="wtvr_message_text", type="text", length=65535, nullable=true)
     */
    private $wtvrMessageText;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="wtvr_message_created", type="datetime", nullable=true)
     */
    private $wtvrMessageCreated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="wtvr_message_sent", type="datetime", nullable=true)
     */
    private $wtvrMessageSent;

    /**
     * @var string
     *
     * @ORM\Column(name="wtvr_message_type", type="string", length=20, nullable=true)
     */
    private $wtvrMessageType;

    /**
     * @var string
     *
     * @ORM\Column(name="wtvr_message_response", type="string", length=255, nullable=true)
     */
    private $wtvrMessageResponse;

    /**
     * @var integer
     *
     * @ORM\Column(name="wtvr_message_queue_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $wtvrMessageQueueId;



    /**
     * Set wtvrMessageRecipient
     *
     * @param string $wtvrMessageRecipient
     * @return WtvrMessageQueueGlobal
     */
    public function setWtvrMessageRecipient($wtvrMessageRecipient)
    {
        $this->wtvrMessageRecipient = $wtvrMessageRecipient;

        return $this;
    }

    /**
     * Get wtvrMessageRecipient
     *
     * @return string 
     */
    public function getWtvrMessageRecipient()
    {
        return $this->wtvrMessageRecipient;
    }

    /**
     * Set wtvrMessageSender
     *
     * @param string $wtvrMessageSender
     * @return WtvrMessageQueueGlobal
     */
    public function setWtvrMessageSender($wtvrMessageSender)
    {
        $this->wtvrMessageSender = $wtvrMessageSender;

        return $this;
    }

    /**
     * Get wtvrMessageSender
     *
     * @return string 
     */
    public function getWtvrMessageSender()
    {
        return $this->wtvrMessageSender;
    }

    /**
     * Set wtvrMessageRecipientFname
     *
     * @param string $wtvrMessageRecipientFname
     * @return WtvrMessageQueueGlobal
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
     * @return WtvrMessageQueueGlobal
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
     * Set wtvrMessageSenderFname
     *
     * @param string $wtvrMessageSenderFname
     * @return WtvrMessageQueueGlobal
     */
    public function setWtvrMessageSenderFname($wtvrMessageSenderFname)
    {
        $this->wtvrMessageSenderFname = $wtvrMessageSenderFname;

        return $this;
    }

    /**
     * Get wtvrMessageSenderFname
     *
     * @return string 
     */
    public function getWtvrMessageSenderFname()
    {
        return $this->wtvrMessageSenderFname;
    }

    /**
     * Set wtvrMessageSenderLname
     *
     * @param string $wtvrMessageSenderLname
     * @return WtvrMessageQueueGlobal
     */
    public function setWtvrMessageSenderLname($wtvrMessageSenderLname)
    {
        $this->wtvrMessageSenderLname = $wtvrMessageSenderLname;

        return $this;
    }

    /**
     * Get wtvrMessageSenderLname
     *
     * @return string 
     */
    public function getWtvrMessageSenderLname()
    {
        return $this->wtvrMessageSenderLname;
    }

    /**
     * Set wtvrMessageSubject
     *
     * @param string $wtvrMessageSubject
     * @return WtvrMessageQueueGlobal
     */
    public function setWtvrMessageSubject($wtvrMessageSubject)
    {
        $this->wtvrMessageSubject = $wtvrMessageSubject;

        return $this;
    }

    /**
     * Get wtvrMessageSubject
     *
     * @return string 
     */
    public function getWtvrMessageSubject()
    {
        return $this->wtvrMessageSubject;
    }

    /**
     * Set wtvrMessageBody
     *
     * @param string $wtvrMessageBody
     * @return WtvrMessageQueueGlobal
     */
    public function setWtvrMessageBody($wtvrMessageBody)
    {
        $this->wtvrMessageBody = $wtvrMessageBody;

        return $this;
    }

    /**
     * Get wtvrMessageBody
     *
     * @return string 
     */
    public function getWtvrMessageBody()
    {
        return $this->wtvrMessageBody;
    }

    /**
     * Set wtvrMessageText
     *
     * @param string $wtvrMessageText
     * @return WtvrMessageQueueGlobal
     */
    public function setWtvrMessageText($wtvrMessageText)
    {
        $this->wtvrMessageText = $wtvrMessageText;

        return $this;
    }

    /**
     * Get wtvrMessageText
     *
     * @return string 
     */
    public function getWtvrMessageText()
    {
        return $this->wtvrMessageText;
    }

    /**
     * Set wtvrMessageCreated
     *
     * @param \DateTime $wtvrMessageCreated
     * @return WtvrMessageQueueGlobal
     */
    public function setWtvrMessageCreated($wtvrMessageCreated)
    {
        $this->wtvrMessageCreated = $wtvrMessageCreated;

        return $this;
    }

    /**
     * Get wtvrMessageCreated
     *
     * @return \DateTime 
     */
    public function getWtvrMessageCreated()
    {
        return $this->wtvrMessageCreated;
    }

    /**
     * Set wtvrMessageSent
     *
     * @param \DateTime $wtvrMessageSent
     * @return WtvrMessageQueueGlobal
     */
    public function setWtvrMessageSent($wtvrMessageSent)
    {
        $this->wtvrMessageSent = $wtvrMessageSent;

        return $this;
    }

    /**
     * Get wtvrMessageSent
     *
     * @return \DateTime 
     */
    public function getWtvrMessageSent()
    {
        return $this->wtvrMessageSent;
    }

    /**
     * Set wtvrMessageType
     *
     * @param string $wtvrMessageType
     * @return WtvrMessageQueueGlobal
     */
    public function setWtvrMessageType($wtvrMessageType)
    {
        $this->wtvrMessageType = $wtvrMessageType;

        return $this;
    }

    /**
     * Get wtvrMessageType
     *
     * @return string 
     */
    public function getWtvrMessageType()
    {
        return $this->wtvrMessageType;
    }

    /**
     * Set wtvrMessageResponse
     *
     * @param string $wtvrMessageResponse
     * @return WtvrMessageQueueGlobal
     */
    public function setWtvrMessageResponse($wtvrMessageResponse)
    {
        $this->wtvrMessageResponse = $wtvrMessageResponse;

        return $this;
    }

    /**
     * Get wtvrMessageResponse
     *
     * @return string 
     */
    public function getWtvrMessageResponse()
    {
        return $this->wtvrMessageResponse;
    }

    /**
     * Get wtvrMessageQueueId
     *
     * @return integer 
     */
    public function getWtvrMessageQueueId()
    {
        return $this->wtvrMessageQueueId;
    }
}
