<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CsTicketStatus
 *
 * @ORM\Table(name="cs_ticket_status")
 * @ORM\Entity
 */
class CsTicketStatus
{
    /**
     * @var string
     *
     * @ORM\Column(name="cs_ticket_status_name", type="string", length=255, nullable=true)
     */
    private $csTicketStatusName;

    /**
     * @var integer
     *
     * @ORM\Column(name="cs_ticket_status_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $csTicketStatusId;



    /**
     * Set csTicketStatusName
     *
     * @param string $csTicketStatusName
     * @return CsTicketStatus
     */
    public function setCsTicketStatusName($csTicketStatusName)
    {
        $this->csTicketStatusName = $csTicketStatusName;

        return $this;
    }

    /**
     * Get csTicketStatusName
     *
     * @return string 
     */
    public function getCsTicketStatusName()
    {
        return $this->csTicketStatusName;
    }

    /**
     * Get csTicketStatusId
     *
     * @return integer 
     */
    public function getCsTicketStatusId()
    {
        return $this->csTicketStatusId;
    }
}
