<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WtvrMessageAddress
 *
 * @ORM\Table(name="wtvr_message_address")
 * @ORM\Entity
 */
class WtvrMessageAddress
{
    /**
     * @var string
     *
     * @ORM\Column(name="wtvr_message_emailaddress", type="string", length=255, nullable=true)
     */
    private $wtvrMessageEmailaddress;

    /**
     * @var integer
     *
     * @ORM\Column(name="wtvr_message_address_valid", type="integer", nullable=true)
     */
    private $wtvrMessageAddressValid;

    /**
     * @var integer
     *
     * @ORM\Column(name="wtvr_message_address_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $wtvrMessageAddressId;



    /**
     * Set wtvrMessageEmailaddress
     *
     * @param string $wtvrMessageEmailaddress
     * @return WtvrMessageAddress
     */
    public function setWtvrMessageEmailaddress($wtvrMessageEmailaddress)
    {
        $this->wtvrMessageEmailaddress = $wtvrMessageEmailaddress;

        return $this;
    }

    /**
     * Get wtvrMessageEmailaddress
     *
     * @return string 
     */
    public function getWtvrMessageEmailaddress()
    {
        return $this->wtvrMessageEmailaddress;
    }

    /**
     * Set wtvrMessageAddressValid
     *
     * @param integer $wtvrMessageAddressValid
     * @return WtvrMessageAddress
     */
    public function setWtvrMessageAddressValid($wtvrMessageAddressValid)
    {
        $this->wtvrMessageAddressValid = $wtvrMessageAddressValid;

        return $this;
    }

    /**
     * Get wtvrMessageAddressValid
     *
     * @return integer 
     */
    public function getWtvrMessageAddressValid()
    {
        return $this->wtvrMessageAddressValid;
    }

    /**
     * Get wtvrMessageAddressId
     *
     * @return integer 
     */
    public function getWtvrMessageAddressId()
    {
        return $this->wtvrMessageAddressId;
    }
}
