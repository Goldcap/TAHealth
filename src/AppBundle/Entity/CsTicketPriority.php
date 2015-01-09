<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CsTicketPriority
 *
 * @ORM\Table(name="cs_ticket_priority")
 * @ORM\Entity
 */
class CsTicketPriority
{
    /**
     * @var string
     *
     * @ORM\Column(name="cs_ticket_priority_name", type="string", length=255, nullable=true)
     */
    private $csTicketPriorityName;

    /**
     * @var integer
     *
     * @ORM\Column(name="cs_ticket_priority_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $csTicketPriorityId;



    /**
     * Set csTicketPriorityName
     *
     * @param string $csTicketPriorityName
     * @return CsTicketPriority
     */
    public function setCsTicketPriorityName($csTicketPriorityName)
    {
        $this->csTicketPriorityName = $csTicketPriorityName;

        return $this;
    }

    /**
     * Get csTicketPriorityName
     *
     * @return string 
     */
    public function getCsTicketPriorityName()
    {
        return $this->csTicketPriorityName;
    }

    /**
     * Get csTicketPriorityId
     *
     * @return integer 
     */
    public function getCsTicketPriorityId()
    {
        return $this->csTicketPriorityId;
    }
}
