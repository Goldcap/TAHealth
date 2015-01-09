<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CmeCredit
 *
 * @ORM\Table(name="cme_credit")
 * @ORM\Entity
 */
class CmeCredit
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fk_user_id", type="integer", nullable=true)
     */
    private $fkUserId;

    /**
     * @var string
     *
     * @ORM\Column(name="cme_credit_name", type="string", length=255, nullable=true)
     */
    private $cmeCreditName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cme_credit_date_added", type="datetime", nullable=true)
     */
    private $cmeCreditDateAdded;

    /**
     * @var string
     *
     * @ORM\Column(name="cme_credit_filename", type="string", length=255, nullable=true)
     */
    private $cmeCreditFilename;

    /**
     * @var string
     *
     * @ORM\Column(name="cme_credit_file_path", type="string", length=255, nullable=true)
     */
    private $cmeCreditFilePath;

    /**
     * @var integer
     *
     * @ORM\Column(name="cme_credit_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cmeCreditId;



    /**
     * Set fkUserId
     *
     * @param integer $fkUserId
     * @return CmeCredit
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
     * Set cmeCreditName
     *
     * @param string $cmeCreditName
     * @return CmeCredit
     */
    public function setCmeCreditName($cmeCreditName)
    {
        $this->cmeCreditName = $cmeCreditName;

        return $this;
    }

    /**
     * Get cmeCreditName
     *
     * @return string 
     */
    public function getCmeCreditName()
    {
        return $this->cmeCreditName;
    }

    /**
     * Set cmeCreditDateAdded
     *
     * @param \DateTime $cmeCreditDateAdded
     * @return CmeCredit
     */
    public function setCmeCreditDateAdded($cmeCreditDateAdded)
    {
        $this->cmeCreditDateAdded = $cmeCreditDateAdded;

        return $this;
    }

    /**
     * Get cmeCreditDateAdded
     *
     * @return \DateTime 
     */
    public function getCmeCreditDateAdded()
    {
        return $this->cmeCreditDateAdded;
    }

    /**
     * Set cmeCreditFilename
     *
     * @param string $cmeCreditFilename
     * @return CmeCredit
     */
    public function setCmeCreditFilename($cmeCreditFilename)
    {
        $this->cmeCreditFilename = $cmeCreditFilename;

        return $this;
    }

    /**
     * Get cmeCreditFilename
     *
     * @return string 
     */
    public function getCmeCreditFilename()
    {
        return $this->cmeCreditFilename;
    }

    /**
     * Set cmeCreditFilePath
     *
     * @param string $cmeCreditFilePath
     * @return CmeCredit
     */
    public function setCmeCreditFilePath($cmeCreditFilePath)
    {
        $this->cmeCreditFilePath = $cmeCreditFilePath;

        return $this;
    }

    /**
     * Get cmeCreditFilePath
     *
     * @return string 
     */
    public function getCmeCreditFilePath()
    {
        return $this->cmeCreditFilePath;
    }

    /**
     * Get cmeCreditId
     *
     * @return integer 
     */
    public function getCmeCreditId()
    {
        return $this->cmeCreditId;
    }
}
