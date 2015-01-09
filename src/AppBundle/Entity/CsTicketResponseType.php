<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CsTicketResponseType
 *
 * @ORM\Table(name="cs_ticket_response_type")
 * @ORM\Entity
 */
class CsTicketResponseType
{
    /**
     * @var string
     *
     * @ORM\Column(name="cs_ticket_response_type_name", type="string", length=255, nullable=true)
     */
    private $csTicketResponseTypeName;

    /**
     * @var string
     *
     * @ORM\Column(name="cs_ticket_response_type_text", type="text", length=65535, nullable=true)
     */
    private $csTicketResponseTypeText;

    /**
     * @var integer
     *
     * @ORM\Column(name="cs_ticket_response_type_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $csTicketResponseTypeId;



    /**
     * Set csTicketResponseTypeName
     *
     * @param string $csTicketResponseTypeName
     * @return CsTicketResponseType
     */
    public function setCsTicketResponseTypeName($csTicketResponseTypeName)
    {
        $this->csTicketResponseTypeName = $csTicketResponseTypeName;

        return $this;
    }

    /**
     * Get csTicketResponseTypeName
     *
     * @return string 
     */
    public function getCsTicketResponseTypeName()
    {
        return $this->csTicketResponseTypeName;
    }

    /**
     * Set csTicketResponseTypeText
     *
     * @param string $csTicketResponseTypeText
     * @return CsTicketResponseType
     */
    public function setCsTicketResponseTypeText($csTicketResponseTypeText)
    {
        $this->csTicketResponseTypeText = $csTicketResponseTypeText;

        return $this;
    }

    /**
     * Get csTicketResponseTypeText
     *
     * @return string 
     */
    public function getCsTicketResponseTypeText()
    {
        return $this->csTicketResponseTypeText;
    }

    /**
     * Get csTicketResponseTypeId
     *
     * @return integer 
     */
    public function getCsTicketResponseTypeId()
    {
        return $this->csTicketResponseTypeId;
    }
}
