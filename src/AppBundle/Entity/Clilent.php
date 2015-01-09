<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Clilent
 *
 * @ORM\Table(name="clilent")
 * @ORM\Entity
 */
class Clilent
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fk_client_user_id", type="integer", nullable=true)
     */
    private $fkClientUserId;

    /**
     * @var integer
     *
     * @ORM\Column(name="fk_event_id", type="integer", nullable=true)
     */
    private $fkEventId;

    /**
     * @var integer
     *
     * @ORM\Column(name="fk_reservation_id", type="integer", nullable=true)
     */
    private $fkReservationId;

    /**
     * @var string
     *
     * @ORM\Column(name="client_notes", type="text", length=65535, nullable=true)
     */
    private $clientNotes;

    /**
     * @var integer
     *
     * @ORM\Column(name="client_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $clientId;



    /**
     * Set fkClientUserId
     *
     * @param integer $fkClientUserId
     * @return Clilent
     */
    public function setFkClientUserId($fkClientUserId)
    {
        $this->fkClientUserId = $fkClientUserId;

        return $this;
    }

    /**
     * Get fkClientUserId
     *
     * @return integer 
     */
    public function getFkClientUserId()
    {
        return $this->fkClientUserId;
    }

    /**
     * Set fkEventId
     *
     * @param integer $fkEventId
     * @return Clilent
     */
    public function setFkEventId($fkEventId)
    {
        $this->fkEventId = $fkEventId;

        return $this;
    }

    /**
     * Get fkEventId
     *
     * @return integer 
     */
    public function getFkEventId()
    {
        return $this->fkEventId;
    }

    /**
     * Set fkReservationId
     *
     * @param integer $fkReservationId
     * @return Clilent
     */
    public function setFkReservationId($fkReservationId)
    {
        $this->fkReservationId = $fkReservationId;

        return $this;
    }

    /**
     * Get fkReservationId
     *
     * @return integer 
     */
    public function getFkReservationId()
    {
        return $this->fkReservationId;
    }

    /**
     * Set clientNotes
     *
     * @param string $clientNotes
     * @return Clilent
     */
    public function setClientNotes($clientNotes)
    {
        $this->clientNotes = $clientNotes;

        return $this;
    }

    /**
     * Get clientNotes
     *
     * @return string 
     */
    public function getClientNotes()
    {
        return $this->clientNotes;
    }

    /**
     * Get clientId
     *
     * @return integer 
     */
    public function getClientId()
    {
        return $this->clientId;
    }
}
