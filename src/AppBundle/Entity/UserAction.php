<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserAction
 *
 * @ORM\Table(name="user_action")
 * @ORM\Entity
 */
class UserAction
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fk_user_id", type="integer", nullable=true)
     */
    private $fkUserId;

    /**
     * @var integer
     *
     * @ORM\Column(name="fk_action_id", type="integer", nullable=true)
     */
    private $fkActionId;

    /**
     * @var string
     *
     * @ORM\Column(name="user_action_ip_address", type="string", length=255, nullable=true)
     */
    private $userActionIpAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="user_action_user_agent", type="string", length=255, nullable=true)
     */
    private $userActionUserAgent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="user_action_date", type="datetime", nullable=true)
     */
    private $userActionDate;

    /**
     * @var string
     *
     * @ORM\Column(name="user_action_data", type="text", length=65535, nullable=true)
     */
    private $userActionData;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_action_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userActionId;



    /**
     * Set fkUserId
     *
     * @param integer $fkUserId
     * @return UserAction
     */
    public function setFkUserId($fkUserId)
    {
        $this->fkUserId = $fkUserId;

        return $this;
    }

    /**
     * Get fkUserId
     *
     * @return integer 
     */
    public function getFkUserId()
    {
        return $this->fkUserId;
    }

    /**
     * Set fkActionId
     *
     * @param integer $fkActionId
     * @return UserAction
     */
    public function setFkActionId($fkActionId)
    {
        $this->fkActionId = $fkActionId;

        return $this;
    }

    /**
     * Get fkActionId
     *
     * @return integer 
     */
    public function getFkActionId()
    {
        return $this->fkActionId;
    }

    /**
     * Set userActionIpAddress
     *
     * @param string $userActionIpAddress
     * @return UserAction
     */
    public function setUserActionIpAddress($userActionIpAddress)
    {
        $this->userActionIpAddress = $userActionIpAddress;

        return $this;
    }

    /**
     * Get userActionIpAddress
     *
     * @return string 
     */
    public function getUserActionIpAddress()
    {
        return $this->userActionIpAddress;
    }

    /**
     * Set userActionUserAgent
     *
     * @param string $userActionUserAgent
     * @return UserAction
     */
    public function setUserActionUserAgent($userActionUserAgent)
    {
        $this->userActionUserAgent = $userActionUserAgent;

        return $this;
    }

    /**
     * Get userActionUserAgent
     *
     * @return string 
     */
    public function getUserActionUserAgent()
    {
        return $this->userActionUserAgent;
    }

    /**
     * Set userActionDate
     *
     * @param \DateTime $userActionDate
     * @return UserAction
     */
    public function setUserActionDate($userActionDate)
    {
        $this->userActionDate = $userActionDate;

        return $this;
    }

    /**
     * Get userActionDate
     *
     * @return \DateTime 
     */
    public function getUserActionDate()
    {
        return $this->userActionDate;
    }

    /**
     * Set userActionData
     *
     * @param string $userActionData
     * @return UserAction
     */
    public function setUserActionData($userActionData)
    {
        $this->userActionData = $userActionData;

        return $this;
    }

    /**
     * Get userActionData
     *
     * @return string 
     */
    public function getUserActionData()
    {
        return $this->userActionData;
    }

    /**
     * Get userActionId
     *
     * @return integer 
     */
    public function getUserActionId()
    {
        return $this->userActionId;
    }
}
