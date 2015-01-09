<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sponsor
 *
 * @ORM\Table(name="sponsor")
 * @ORM\Entity
 */
class Sponsor
{
    /**
     * @var string
     *
     * @ORM\Column(name="sponsor_name", type="string", length=255, nullable=true)
     */
    private $sponsorName;

    /**
     * @var integer
     *
     * @ORM\Column(name="sponsor_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sponsorId;



    /**
     * Set sponsorName
     *
     * @param string $sponsorName
     * @return Sponsor
     */
    public function setSponsorName($sponsorName)
    {
        $this->sponsorName = $sponsorName;

        return $this;
    }

    /**
     * Get sponsorName
     *
     * @return string 
     */
    public function getSponsorName()
    {
        return $this->sponsorName;
    }

    /**
     * Get sponsorId
     *
     * @return integer 
     */
    public function getSponsorId()
    {
        return $this->sponsorId;
    }
}
