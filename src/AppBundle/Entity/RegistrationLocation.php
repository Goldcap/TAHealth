<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RegistrationLocation
 *
 * @ORM\Table(name="registration_location", indexes={@ORM\Index(name="registration", columns={"fk_registration_id"}), @ORM\Index(name="location", columns={"fk_location_id"})})
 * @ORM\Entity
 */
class RegistrationLocation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fk_registration_id", type="integer", nullable=true)
     */
    private $fkRegistrationId;

    /**
     * @var integer
     *
     * @ORM\Column(name="fk_location_id", type="integer", nullable=true)
     */
    private $fkLocationId;

    /**
     * @var integer
     *
     * @ORM\Column(name="registration_location_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $registrationLocationId;



    /**
     * Set fkRegistrationId
     *
     * @param integer $fkRegistrationId
     * @return RegistrationLocation
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
     * Set fkLocationId
     *
     * @param integer $fkLocationId
     * @return RegistrationLocation
     */
    public function setFkLocationId($fkLocationId)
    {
        $this->fkLocationId = $fkLocationId;

        return $this;
    }

    /**
     * Get fkLocationId
     *
     * @return integer 
     */
    public function getFkLocationId()
    {
        return $this->fkLocationId;
    }

    /**
     * Get registrationLocationId
     *
     * @return integer 
     */
    public function getRegistrationLocationId()
    {
        return $this->registrationLocationId;
    }
}
