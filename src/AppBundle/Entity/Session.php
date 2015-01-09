<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Session
 *
 * @ORM\Table(name="session")
 * @ORM\Entity
 */
class Session
{
    /**
     * @var string
     *
     * @ORM\Column(name="session_uuid", type="string", length=255, nullable=true)
     */
    private $sessionUuid;

    /**
     * @var string
     *
     * @ORM\Column(name="session_data", type="text", length=65535, nullable=true)
     */
    private $sessionData;

    /**
     * @var integer
     *
     * @ORM\Column(name="session_time", type="bigint", nullable=true)
     */
    private $sessionTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="session_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sessionId;



    /**
     * Set sessionUuid
     *
     * @param string $sessionUuid
     * @return Session
     */
    public function setSessionUuid($sessionUuid)
    {
        $this->sessionUuid = $sessionUuid;

        return $this;
    }

    /**
     * Get sessionUuid
     *
     * @return string 
     */
    public function getSessionUuid()
    {
        return $this->sessionUuid;
    }

    /**
     * Set sessionData
     *
     * @param string $sessionData
     * @return Session
     */
    public function setSessionData($sessionData)
    {
        $this->sessionData = $sessionData;

        return $this;
    }

    /**
     * Get sessionData
     *
     * @return string 
     */
    public function getSessionData()
    {
        return $this->sessionData;
    }

    /**
     * Set sessionTime
     *
     * @param integer $sessionTime
     * @return Session
     */
    public function setSessionTime($sessionTime)
    {
        $this->sessionTime = $sessionTime;

        return $this;
    }

    /**
     * Get sessionTime
     *
     * @return integer 
     */
    public function getSessionTime()
    {
        return $this->sessionTime;
    }

    /**
     * Get sessionId
     *
     * @return integer 
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }
}
