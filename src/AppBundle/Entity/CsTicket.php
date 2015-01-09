<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CsTicket
 *
 * @ORM\Table(name="cs_ticket")
 * @ORM\Entity
 */
class CsTicket
{
    /**
     * @var string
     *
     * @ORM\Column(name="cs_ticket_guid", type="string", length=255, nullable=true)
     */
    private $csTicketGuid;

    /**
     * @var string
     *
     * @ORM\Column(name="cs_ticket_subject", type="string", length=255, nullable=true)
     */
    private $csTicketSubject;

    /**
     * @var string
     *
     * @ORM\Column(name="cs_ticket_recipient", type="string", length=255, nullable=true)
     */
    private $csTicketRecipient;

    /**
     * @var string
     *
     * @ORM\Column(name="cs_ticket_author_email", type="string", length=255, nullable=true)
     */
    private $csTicketAuthorEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="cs_ticket_author", type="string", length=255, nullable=true)
     */
    private $csTicketAuthor;

    /**
     * @var integer
     *
     * @ORM\Column(name="cs_ticket_status", type="integer", nullable=true)
     */
    private $csTicketStatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="cs_ticket_priority", type="integer", nullable=true)
     */
    private $csTicketPriority;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cs_ticket_date_created", type="datetime", nullable=true)
     */
    private $csTicketDateCreated;

    /**
     * @var string
     *
     * @ORM\Column(name="cs_ticket_ip", type="string", length=255, nullable=true)
     */
    private $csTicketIp;

    /**
     * @var string
     *
     * @ORM\Column(name="cs_ticket_user_agent", type="string", length=255, nullable=true)
     */
    private $csTicketUserAgent;

    /**
     * @var string
     *
     * @ORM\Column(name="cs_ticket_message", type="text", length=65535, nullable=true)
     */
    private $csTicketMessage;

    /**
     * @var string
     *
     * @ORM\Column(name="cs_ticket_data", type="text", length=65535, nullable=true)
     */
    private $csTicketData;

    /**
     * @var integer
     *
     * @ORM\Column(name="cs_ticket_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $csTicketId;



    /**
     * Set csTicketGuid
     *
     * @param string $csTicketGuid
     * @return CsTicket
     */
    public function setCsTicketGuid($csTicketGuid)
    {
        $this->csTicketGuid = $csTicketGuid;

        return $this;
    }

    /**
     * Get csTicketGuid
     *
     * @return string 
     */
    public function getCsTicketGuid()
    {
        return $this->csTicketGuid;
    }

    /**
     * Set csTicketSubject
     *
     * @param string $csTicketSubject
     * @return CsTicket
     */
    public function setCsTicketSubject($csTicketSubject)
    {
        $this->csTicketSubject = $csTicketSubject;

        return $this;
    }

    /**
     * Get csTicketSubject
     *
     * @return string 
     */
    public function getCsTicketSubject()
    {
        return $this->csTicketSubject;
    }

    /**
     * Set csTicketRecipient
     *
     * @param string $csTicketRecipient
     * @return CsTicket
     */
    public function setCsTicketRecipient($csTicketRecipient)
    {
        $this->csTicketRecipient = $csTicketRecipient;

        return $this;
    }

    /**
     * Get csTicketRecipient
     *
     * @return string 
     */
    public function getCsTicketRecipient()
    {
        return $this->csTicketRecipient;
    }

    /**
     * Set csTicketAuthorEmail
     *
     * @param string $csTicketAuthorEmail
     * @return CsTicket
     */
    public function setCsTicketAuthorEmail($csTicketAuthorEmail)
    {
        $this->csTicketAuthorEmail = $csTicketAuthorEmail;

        return $this;
    }

    /**
     * Get csTicketAuthorEmail
     *
     * @return string 
     */
    public function getCsTicketAuthorEmail()
    {
        return $this->csTicketAuthorEmail;
    }

    /**
     * Set csTicketAuthor
     *
     * @param string $csTicketAuthor
     * @return CsTicket
     */
    public function setCsTicketAuthor($csTicketAuthor)
    {
        $this->csTicketAuthor = $csTicketAuthor;

        return $this;
    }

    /**
     * Get csTicketAuthor
     *
     * @return string 
     */
    public function getCsTicketAuthor()
    {
        return $this->csTicketAuthor;
    }

    /**
     * Set csTicketStatus
     *
     * @param integer $csTicketStatus
     * @return CsTicket
     */
    public function setCsTicketStatus($csTicketStatus)
    {
        $this->csTicketStatus = $csTicketStatus;

        return $this;
    }

    /**
     * Get csTicketStatus
     *
     * @return integer 
     */
    public function getCsTicketStatus()
    {
        return $this->csTicketStatus;
    }

    /**
     * Set csTicketPriority
     *
     * @param integer $csTicketPriority
     * @return CsTicket
     */
    public function setCsTicketPriority($csTicketPriority)
    {
        $this->csTicketPriority = $csTicketPriority;

        return $this;
    }

    /**
     * Get csTicketPriority
     *
     * @return integer 
     */
    public function getCsTicketPriority()
    {
        return $this->csTicketPriority;
    }

    /**
     * Set csTicketDateCreated
     *
     * @param \DateTime $csTicketDateCreated
     * @return CsTicket
     */
    public function setCsTicketDateCreated($csTicketDateCreated)
    {
        $this->csTicketDateCreated = $csTicketDateCreated;

        return $this;
    }

    /**
     * Get csTicketDateCreated
     *
     * @return \DateTime 
     */
    public function getCsTicketDateCreated()
    {
        return $this->csTicketDateCreated;
    }

    /**
     * Set csTicketIp
     *
     * @param string $csTicketIp
     * @return CsTicket
     */
    public function setCsTicketIp($csTicketIp)
    {
        $this->csTicketIp = $csTicketIp;

        return $this;
    }

    /**
     * Get csTicketIp
     *
     * @return string 
     */
    public function getCsTicketIp()
    {
        return $this->csTicketIp;
    }

    /**
     * Set csTicketUserAgent
     *
     * @param string $csTicketUserAgent
     * @return CsTicket
     */
    public function setCsTicketUserAgent($csTicketUserAgent)
    {
        $this->csTicketUserAgent = $csTicketUserAgent;

        return $this;
    }

    /**
     * Get csTicketUserAgent
     *
     * @return string 
     */
    public function getCsTicketUserAgent()
    {
        return $this->csTicketUserAgent;
    }

    /**
     * Set csTicketMessage
     *
     * @param string $csTicketMessage
     * @return CsTicket
     */
    public function setCsTicketMessage($csTicketMessage)
    {
        $this->csTicketMessage = $csTicketMessage;

        return $this;
    }

    /**
     * Get csTicketMessage
     *
     * @return string 
     */
    public function getCsTicketMessage()
    {
        return $this->csTicketMessage;
    }

    /**
     * Set csTicketData
     *
     * @param string $csTicketData
     * @return CsTicket
     */
    public function setCsTicketData($csTicketData)
    {
        $this->csTicketData = $csTicketData;

        return $this;
    }

    /**
     * Get csTicketData
     *
     * @return string 
     */
    public function getCsTicketData()
    {
        return $this->csTicketData;
    }

    /**
     * Get csTicketId
     *
     * @return integer 
     */
    public function getCsTicketId()
    {
        return $this->csTicketId;
    }
}
