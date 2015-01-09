<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WtvrMessageView
 *
 * @ORM\Table(name="wtvr_message_view")
 * @ORM\Entity
 */
class WtvrMessageView
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fk_wtvr_message_id", type="integer", nullable=true)
     */
    private $fkWtvrMessageId;

    /**
     * @var integer
     *
     * @ORM\Column(name="fk_message_recipient_id", type="integer", nullable=true)
     */
    private $fkMessageRecipientId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="wtvr_message_view_date_viewed", type="datetime", nullable=true)
     */
    private $wtvrMessageViewDateViewed;

    /**
     * @var string
     *
     * @ORM\Column(name="wtvr_message_view_ip_address", type="string", length=20, nullable=true)
     */
    private $wtvrMessageViewIpAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="wtvr_message_view_browser", type="string", length=255, nullable=true)
     */
    private $wtvrMessageViewBrowser;

    /**
     * @var string
     *
     * @ORM\Column(name="wtvr_message_view_data", type="text", length=65535, nullable=true)
     */
    private $wtvrMessageViewData;

    /**
     * @var integer
     *
     * @ORM\Column(name="wtvr_message_view_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $wtvrMessageViewId;



    /**
     * Set fkWtvrMessageId
     *
     * @param integer $fkWtvrMessageId
     * @return WtvrMessageView
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
     * Set fkMessageRecipientId
     *
     * @param integer $fkMessageRecipientId
     * @return WtvrMessageView
     */
    public function setFkMessageRecipientId($fkMessageRecipientId)
    {
        $this->fkMessageRecipientId = $fkMessageRecipientId;

        return $this;
    }

    /**
     * Get fkMessageRecipientId
     *
     * @return integer 
     */
    public function getFkMessageRecipientId()
    {
        return $this->fkMessageRecipientId;
    }

    /**
     * Set wtvrMessageViewDateViewed
     *
     * @param \DateTime $wtvrMessageViewDateViewed
     * @return WtvrMessageView
     */
    public function setWtvrMessageViewDateViewed($wtvrMessageViewDateViewed)
    {
        $this->wtvrMessageViewDateViewed = $wtvrMessageViewDateViewed;

        return $this;
    }

    /**
     * Get wtvrMessageViewDateViewed
     *
     * @return \DateTime 
     */
    public function getWtvrMessageViewDateViewed()
    {
        return $this->wtvrMessageViewDateViewed;
    }

    /**
     * Set wtvrMessageViewIpAddress
     *
     * @param string $wtvrMessageViewIpAddress
     * @return WtvrMessageView
     */
    public function setWtvrMessageViewIpAddress($wtvrMessageViewIpAddress)
    {
        $this->wtvrMessageViewIpAddress = $wtvrMessageViewIpAddress;

        return $this;
    }

    /**
     * Get wtvrMessageViewIpAddress
     *
     * @return string 
     */
    public function getWtvrMessageViewIpAddress()
    {
        return $this->wtvrMessageViewIpAddress;
    }

    /**
     * Set wtvrMessageViewBrowser
     *
     * @param string $wtvrMessageViewBrowser
     * @return WtvrMessageView
     */
    public function setWtvrMessageViewBrowser($wtvrMessageViewBrowser)
    {
        $this->wtvrMessageViewBrowser = $wtvrMessageViewBrowser;

        return $this;
    }

    /**
     * Get wtvrMessageViewBrowser
     *
     * @return string 
     */
    public function getWtvrMessageViewBrowser()
    {
        return $this->wtvrMessageViewBrowser;
    }

    /**
     * Set wtvrMessageViewData
     *
     * @param string $wtvrMessageViewData
     * @return WtvrMessageView
     */
    public function setWtvrMessageViewData($wtvrMessageViewData)
    {
        $this->wtvrMessageViewData = $wtvrMessageViewData;

        return $this;
    }

    /**
     * Get wtvrMessageViewData
     *
     * @return string 
     */
    public function getWtvrMessageViewData()
    {
        return $this->wtvrMessageViewData;
    }

    /**
     * Get wtvrMessageViewId
     *
     * @return integer 
     */
    public function getWtvrMessageViewId()
    {
        return $this->wtvrMessageViewId;
    }
}
