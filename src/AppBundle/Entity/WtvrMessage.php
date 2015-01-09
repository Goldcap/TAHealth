<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WtvrMessage
 *
 * @ORM\Table(name="wtvr_message")
 * @ORM\Entity
 */
class WtvrMessage
{
    /**
     * @var string
     *
     * @ORM\Column(name="wtvr_message_identifier", type="string", length=255, nullable=true)
     */
    private $wtvrMessageIdentifier;

    /**
     * @var string
     *
     * @ORM\Column(name="wtvr_message_scope", type="string", length=25, nullable=true)
     */
    private $wtvrMessageScope;

    /**
     * @var integer
     *
     * @ORM\Column(name="wtvr_message_send_user_id", type="integer", nullable=true)
     */
    private $wtvrMessageSendUserId;

    /**
     * @var string
     *
     * @ORM\Column(name="wtvr_message_send_email", type="string", length=255, nullable=true)
     */
    private $wtvrMessageSendEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="wtvr_message_send_fname", type="string", length=255, nullable=true)
     */
    private $wtvrMessageSendFname;

    /**
     * @var string
     *
     * @ORM\Column(name="wtvr_message_send_lname", type="string", length=255, nullable=true)
     */
    private $wtvrMessageSendLname;

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
     * @ORM\Column(name="wtvr_message_date", type="datetime", nullable=true)
     */
    private $wtvrMessageDate;

    /**
     * @var string
     *
     * @ORM\Column(name="wtvr_message_template", type="string", length=50, nullable=true)
     */
    private $wtvrMessageTemplate;

    /**
     * @var integer
     *
     * @ORM\Column(name="wtvr_message_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $wtvrMessageId;



    /**
     * Set wtvrMessageIdentifier
     *
     * @param string $wtvrMessageIdentifier
     * @return WtvrMessage
     */
    public function setWtvrMessageIdentifier($wtvrMessageIdentifier)
    {
        $this->wtvrMessageIdentifier = $wtvrMessageIdentifier;

        return $this;
    }

    /**
     * Get wtvrMessageIdentifier
     *
     * @return string 
     */
    public function getWtvrMessageIdentifier()
    {
        return $this->wtvrMessageIdentifier;
    }

    /**
     * Set wtvrMessageScope
     *
     * @param string $wtvrMessageScope
     * @return WtvrMessage
     */
    public function setWtvrMessageScope($wtvrMessageScope)
    {
        $this->wtvrMessageScope = $wtvrMessageScope;

        return $this;
    }

    /**
     * Get wtvrMessageScope
     *
     * @return string 
     */
    public function getWtvrMessageScope()
    {
        return $this->wtvrMessageScope;
    }

    /**
     * Set wtvrMessageSendUserId
     *
     * @param integer $wtvrMessageSendUserId
     * @return WtvrMessage
     */
    public function setWtvrMessageSendUserId($wtvrMessageSendUserId)
    {
        $this->wtvrMessageSendUserId = $wtvrMessageSendUserId;

        return $this;
    }

    /**
     * Get wtvrMessageSendUserId
     *
     * @return integer 
     */
    public function getWtvrMessageSendUserId()
    {
        return $this->wtvrMessageSendUserId;
    }

    /**
     * Set wtvrMessageSendEmail
     *
     * @param string $wtvrMessageSendEmail
     * @return WtvrMessage
     */
    public function setWtvrMessageSendEmail($wtvrMessageSendEmail)
    {
        $this->wtvrMessageSendEmail = $wtvrMessageSendEmail;

        return $this;
    }

    /**
     * Get wtvrMessageSendEmail
     *
     * @return string 
     */
    public function getWtvrMessageSendEmail()
    {
        return $this->wtvrMessageSendEmail;
    }

    /**
     * Set wtvrMessageSendFname
     *
     * @param string $wtvrMessageSendFname
     * @return WtvrMessage
     */
    public function setWtvrMessageSendFname($wtvrMessageSendFname)
    {
        $this->wtvrMessageSendFname = $wtvrMessageSendFname;

        return $this;
    }

    /**
     * Get wtvrMessageSendFname
     *
     * @return string 
     */
    public function getWtvrMessageSendFname()
    {
        return $this->wtvrMessageSendFname;
    }

    /**
     * Set wtvrMessageSendLname
     *
     * @param string $wtvrMessageSendLname
     * @return WtvrMessage
     */
    public function setWtvrMessageSendLname($wtvrMessageSendLname)
    {
        $this->wtvrMessageSendLname = $wtvrMessageSendLname;

        return $this;
    }

    /**
     * Get wtvrMessageSendLname
     *
     * @return string 
     */
    public function getWtvrMessageSendLname()
    {
        return $this->wtvrMessageSendLname;
    }

    /**
     * Set wtvrMessageSubject
     *
     * @param string $wtvrMessageSubject
     * @return WtvrMessage
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
     * @return WtvrMessage
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
     * @return WtvrMessage
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
     * Set wtvrMessageDate
     *
     * @param \DateTime $wtvrMessageDate
     * @return WtvrMessage
     */
    public function setWtvrMessageDate($wtvrMessageDate)
    {
        $this->wtvrMessageDate = $wtvrMessageDate;

        return $this;
    }

    /**
     * Get wtvrMessageDate
     *
     * @return \DateTime 
     */
    public function getWtvrMessageDate()
    {
        return $this->wtvrMessageDate;
    }

    /**
     * Set wtvrMessageTemplate
     *
     * @param string $wtvrMessageTemplate
     * @return WtvrMessage
     */
    public function setWtvrMessageTemplate($wtvrMessageTemplate)
    {
        $this->wtvrMessageTemplate = $wtvrMessageTemplate;

        return $this;
    }

    /**
     * Get wtvrMessageTemplate
     *
     * @return string 
     */
    public function getWtvrMessageTemplate()
    {
        return $this->wtvrMessageTemplate;
    }

    /**
     * Get wtvrMessageId
     *
     * @return integer 
     */
    public function getWtvrMessageId()
    {
        return $this->wtvrMessageId;
    }
}
