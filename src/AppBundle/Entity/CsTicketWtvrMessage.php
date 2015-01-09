<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CsTicketWtvrMessage
 *
 * @ORM\Table(name="cs_ticket_wtvr_message")
 * @ORM\Entity
 */
class CsTicketWtvrMessage
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fk_cs_ticket_id", type="integer", nullable=true)
     */
    private $fkCsTicketId;

    /**
     * @var integer
     *
     * @ORM\Column(name="fk_wtvr_message_id", type="integer", nullable=true)
     */
    private $fkWtvrMessageId;

    /**
     * @var integer
     *
     * @ORM\Column(name="cs_ticket_message_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $csTicketMessageId;



    /**
     * Set fkCsTicketId
     *
     * @param integer $fkCsTicketId
     * @return CsTicketWtvrMessage
     */
    public function setFkCsTicketId($fkCsTicketId)
    {
        $this->fkCsTicketId = $fkCsTicketId;

        return $this;
    }

    /**
     * Get fkCsTicketId
     *
     * @return integer 
     */
    public function getFkCsTicketId()
    {
        return $this->fkCsTicketId;
    }

    /**
     * Set fkWtvrMessageId
     *
     * @param integer $fkWtvrMessageId
     * @return CsTicketWtvrMessage
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
     * Get csTicketMessageId
     *
     * @return integer 
     */
    public function getCsTicketMessageId()
    {
        return $this->csTicketMessageId;
    }
}
