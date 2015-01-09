<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity
 */
class Reservation
{
    /**
     * @var string
     *
     * @ORM\Column(name="reservation_notes", type="text", length=65535, nullable=true)
     */
    private $reservationNotes;

    /**
     * @var integer
     *
     * @ORM\Column(name="reservation_number_guests", type="integer", nullable=true)
     */
    private $reservationNumberGuests;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="reservation_start_date", type="datetime", nullable=true)
     */
    private $reservationStartDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="reservation_end_date", type="datetime", nullable=true)
     */
    private $reservationEndDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="reservation_create_date", type="datetime", nullable=true)
     */
    private $reservationCreateDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="fk_admin_user_id", type="integer", nullable=true)
     */
    private $fkAdminUserId;

    /**
     * @var integer
     *
     * @ORM\Column(name="fk_user_id", type="integer", nullable=false)
     */
    private $fkUserId;

    /**
     * @var integer
     *
     * @ORM\Column(name="reservation_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $reservationId;



    /**
     * Set reservationNotes
     *
     * @param string $reservationNotes
     * @return Reservation
     */
    public function setReservationNotes($reservationNotes)
    {
        $this->reservationNotes = $reservationNotes;

        return $this;
    }

    /**
     * Get reservationNotes
     *
     * @return string 
     */
    public function getReservationNotes()
    {
        return $this->reservationNotes;
    }

    /**
     * Set reservationNumberGuests
     *
     * @param integer $reservationNumberGuests
     * @return Reservation
     */
    public function setReservationNumberGuests($reservationNumberGuests)
    {
        $this->reservationNumberGuests = $reservationNumberGuests;

        return $this;
    }

    /**
     * Get reservationNumberGuests
     *
     * @return integer 
     */
    public function getReservationNumberGuests()
    {
        return $this->reservationNumberGuests;
    }

    /**
     * Set reservationStartDate
     *
     * @param \DateTime $reservationStartDate
     * @return Reservation
     */
    public function setReservationStartDate($reservationStartDate)
    {
        $this->reservationStartDate = $reservationStartDate;

        return $this;
    }

    /**
     * Get reservationStartDate
     *
     * @return \DateTime 
     */
    public function getReservationStartDate()
    {
        return $this->reservationStartDate;
    }

    /**
     * Set reservationEndDate
     *
     * @param \DateTime $reservationEndDate
     * @return Reservation
     */
    public function setReservationEndDate($reservationEndDate)
    {
        $this->reservationEndDate = $reservationEndDate;

        return $this;
    }

    /**
     * Get reservationEndDate
     *
     * @return \DateTime 
     */
    public function getReservationEndDate()
    {
        return $this->reservationEndDate;
    }

    /**
     * Set reservationCreateDate
     *
     * @param \DateTime $reservationCreateDate
     * @return Reservation
     */
    public function setReservationCreateDate($reservationCreateDate)
    {
        $this->reservationCreateDate = $reservationCreateDate;

        return $this;
    }

    /**
     * Get reservationCreateDate
     *
     * @return \DateTime 
     */
    public function getReservationCreateDate()
    {
        return $this->reservationCreateDate;
    }

    /**
     * Set fkAdminUserId
     *
     * @param integer $fkAdminUserId
     * @return Reservation
     */
    public function setFkAdminUserId($fkAdminUserId)
    {
        $this->fkAdminUserId = $fkAdminUserId;

        return $this;
    }

    /**
     * Get fkAdminUserId
     *
     * @return integer 
     */
    public function getFkAdminUserId()
    {
        return $this->fkAdminUserId;
    }

    /**
     * Set fkUserId
     *
     * @param integer $fkUserId
     * @return Reservation
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
     * Get reservationId
     *
     * @return integer 
     */
    public function getReservationId()
    {
        return $this->reservationId;
    }
}
