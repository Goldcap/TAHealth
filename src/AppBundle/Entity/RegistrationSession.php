<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RegistrationSession
 *
 * @ORM\Table(name="registration_session", indexes={@ORM\Index(name="session", columns={"fk_session_id"}), @ORM\Index(name="registration", columns={"fk_registration_id"})})
 * @ORM\Entity
 */
class RegistrationSession
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fk_session_id", type="integer", nullable=true)
     */
    private $fkSessionId;

    /**
     * @var integer
     *
     * @ORM\Column(name="fk_registration_id", type="integer", nullable=true)
     */
    private $fkRegistrationId;

    /**
     * @var integer
     *
     * @ORM\Column(name="registration_session_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $registrationSessionId;



    /**
     * Set fkSessionId
     *
     * @param integer $fkSessionId
     * @return RegistrationSession
     */
    public function setFkSessionId($fkSessionId)
    {
        $this->fkSessionId = $fkSessionId;

        return $this;
    }

    /**
     * Get fkSessionId
     *
     * @return integer 
     */
    public function getFkSessionId()
    {
        return $this->fkSessionId;
    }

    /**
     * Set fkRegistrationId
     *
     * @param integer $fkRegistrationId
     * @return RegistrationSession
     */
    public function setFkRegistrationId($fkRegistrationId)
    {
        $this->fkRegistrationId = $fkRegistrationId;

        return $this;
    }

    /**
     * Get fkRegistrationId
     *
     * @return integer 
     */
    public function getFkRegistrationId()
    {
        return $this->fkRegistrationId;
    }

    /**
     * Get registrationSessionId
     *
     * @return integer 
     */
    public function getRegistrationSessionId()
    {
        return $this->registrationSessionId;
    }
}
