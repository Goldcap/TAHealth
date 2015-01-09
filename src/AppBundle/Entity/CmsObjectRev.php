<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CmsObjectRev
 *
 * @ORM\Table(name="cms_object_rev")
 * @ORM\Entity
 */
class CmsObjectRev
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fk_cms_object_id", type="integer", nullable=true)
     */
    private $fkCmsObjectId;

    /**
     * @var integer
     *
     * @ORM\Column(name="cms_object_rev_owner", type="integer", nullable=true)
     */
    private $cmsObjectRevOwner;

    /**
     * @var integer
     *
     * @ORM\Column(name="cms_object_rev_count", type="integer", nullable=true)
     */
    private $cmsObjectRevCount;

    /**
     * @var string
     *
     * @ORM\Column(name="cms_object_rev_name", type="string", length=255, nullable=true)
     */
    private $cmsObjectRevName;

    /**
     * @var string
     *
     * @ORM\Column(name="cms_object_rev_title", type="string", length=255, nullable=true)
     */
    private $cmsObjectRevTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="cms_object_rev_teaser", type="text", length=65535, nullable=true)
     */
    private $cmsObjectRevTeaser;

    /**
     * @var string
     *
     * @ORM\Column(name="cms_object_rev_text", type="text", length=65535, nullable=true)
     */
    private $cmsObjectRevText;

    /**
     * @var string
     *
     * @ORM\Column(name="cms_object_rev_properties", type="text", length=65535, nullable=true)
     */
    private $cmsObjectRevProperties;

    /**
     * @var string
     *
     * @ORM\Column(name="cms_object_rev_note", type="text", length=65535, nullable=true)
     */
    private $cmsObjectRevNote;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cms_object_rev_date", type="datetime", nullable=true)
     */
    private $cmsObjectRevDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cms_object_start_date", type="datetime", nullable=true)
     */
    private $cmsObjectStartDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cms_object_end_date", type="datetime", nullable=true)
     */
    private $cmsObjectEndDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="cms_object_rev_flag", type="integer", nullable=true)
     */
    private $cmsObjectRevFlag;

    /**
     * @var integer
     *
     * @ORM\Column(name="cms_object_rev_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cmsObjectRevId;



    /**
     * Set fkCmsObjectId
     *
     * @param integer $fkCmsObjectId
     * @return CmsObjectRev
     */
    public function setFkCmsObjectId($fkCmsObjectId)
    {
        $this->fkCmsObjectId = $fkCmsObjectId;

        return $this;
    }

    /**
     * Get fkCmsObjectId
     *
     * @return integer 
     */
    public function getFkCmsObjectId()
    {
        return $this->fkCmsObjectId;
    }

    /**
     * Set cmsObjectRevOwner
     *
     * @param integer $cmsObjectRevOwner
     * @return CmsObjectRev
     */
    public function setCmsObjectRevOwner($cmsObjectRevOwner)
    {
        $this->cmsObjectRevOwner = $cmsObjectRevOwner;

        return $this;
    }

    /**
     * Get cmsObjectRevOwner
     *
     * @return integer 
     */
    public function getCmsObjectRevOwner()
    {
        return $this->cmsObjectRevOwner;
    }

    /**
     * Set cmsObjectRevCount
     *
     * @param integer $cmsObjectRevCount
     * @return CmsObjectRev
     */
    public function setCmsObjectRevCount($cmsObjectRevCount)
    {
        $this->cmsObjectRevCount = $cmsObjectRevCount;

        return $this;
    }

    /**
     * Get cmsObjectRevCount
     *
     * @return integer 
     */
    public function getCmsObjectRevCount()
    {
        return $this->cmsObjectRevCount;
    }

    /**
     * Set cmsObjectRevName
     *
     * @param string $cmsObjectRevName
     * @return CmsObjectRev
     */
    public function setCmsObjectRevName($cmsObjectRevName)
    {
        $this->cmsObjectRevName = $cmsObjectRevName;

        return $this;
    }

    /**
     * Get cmsObjectRevName
     *
     * @return string 
     */
    public function getCmsObjectRevName()
    {
        return $this->cmsObjectRevName;
    }

    /**
     * Set cmsObjectRevTitle
     *
     * @param string $cmsObjectRevTitle
     * @return CmsObjectRev
     */
    public function setCmsObjectRevTitle($cmsObjectRevTitle)
    {
        $this->cmsObjectRevTitle = $cmsObjectRevTitle;

        return $this;
    }

    /**
     * Get cmsObjectRevTitle
     *
     * @return string 
     */
    public function getCmsObjectRevTitle()
    {
        return $this->cmsObjectRevTitle;
    }

    /**
     * Set cmsObjectRevTeaser
     *
     * @param string $cmsObjectRevTeaser
     * @return CmsObjectRev
     */
    public function setCmsObjectRevTeaser($cmsObjectRevTeaser)
    {
        $this->cmsObjectRevTeaser = $cmsObjectRevTeaser;

        return $this;
    }

    /**
     * Get cmsObjectRevTeaser
     *
     * @return string 
     */
    public function getCmsObjectRevTeaser()
    {
        return $this->cmsObjectRevTeaser;
    }

    /**
     * Set cmsObjectRevText
     *
     * @param string $cmsObjectRevText
     * @return CmsObjectRev
     */
    public function setCmsObjectRevText($cmsObjectRevText)
    {
        $this->cmsObjectRevText = $cmsObjectRevText;

        return $this;
    }

    /**
     * Get cmsObjectRevText
     *
     * @return string 
     */
    public function getCmsObjectRevText()
    {
        return $this->cmsObjectRevText;
    }

    /**
     * Set cmsObjectRevProperties
     *
     * @param string $cmsObjectRevProperties
     * @return CmsObjectRev
     */
    public function setCmsObjectRevProperties($cmsObjectRevProperties)
    {
        $this->cmsObjectRevProperties = $cmsObjectRevProperties;

        return $this;
    }

    /**
     * Get cmsObjectRevProperties
     *
     * @return string 
     */
    public function getCmsObjectRevProperties()
    {
        return $this->cmsObjectRevProperties;
    }

    /**
     * Set cmsObjectRevNote
     *
     * @param string $cmsObjectRevNote
     * @return CmsObjectRev
     */
    public function setCmsObjectRevNote($cmsObjectRevNote)
    {
        $this->cmsObjectRevNote = $cmsObjectRevNote;

        return $this;
    }

    /**
     * Get cmsObjectRevNote
     *
     * @return string 
     */
    public function getCmsObjectRevNote()
    {
        return $this->cmsObjectRevNote;
    }

    /**
     * Set cmsObjectRevDate
     *
     * @param \DateTime $cmsObjectRevDate
     * @return CmsObjectRev
     */
    public function setCmsObjectRevDate($cmsObjectRevDate)
    {
        $this->cmsObjectRevDate = $cmsObjectRevDate;

        return $this;
    }

    /**
     * Get cmsObjectRevDate
     *
     * @return \DateTime 
     */
    public function getCmsObjectRevDate()
    {
        return $this->cmsObjectRevDate;
    }

    /**
     * Set cmsObjectStartDate
     *
     * @param \DateTime $cmsObjectStartDate
     * @return CmsObjectRev
     */
    public function setCmsObjectStartDate($cmsObjectStartDate)
    {
        $this->cmsObjectStartDate = $cmsObjectStartDate;

        return $this;
    }

    /**
     * Get cmsObjectStartDate
     *
     * @return \DateTime 
     */
    public function getCmsObjectStartDate()
    {
        return $this->cmsObjectStartDate;
    }

    /**
     * Set cmsObjectEndDate
     *
     * @param \DateTime $cmsObjectEndDate
     * @return CmsObjectRev
     */
    public function setCmsObjectEndDate($cmsObjectEndDate)
    {
        $this->cmsObjectEndDate = $cmsObjectEndDate;

        return $this;
    }

    /**
     * Get cmsObjectEndDate
     *
     * @return \DateTime 
     */
    public function getCmsObjectEndDate()
    {
        return $this->cmsObjectEndDate;
    }

    /**
     * Set cmsObjectRevFlag
     *
     * @param integer $cmsObjectRevFlag
     * @return CmsObjectRev
     */
    public function setCmsObjectRevFlag($cmsObjectRevFlag)
    {
        $this->cmsObjectRevFlag = $cmsObjectRevFlag;

        return $this;
    }

    /**
     * Get cmsObjectRevFlag
     *
     * @return integer 
     */
    public function getCmsObjectRevFlag()
    {
        return $this->cmsObjectRevFlag;
    }

    /**
     * Get cmsObjectRevId
     *
     * @return integer 
     */
    public function getCmsObjectRevId()
    {
        return $this->cmsObjectRevId;
    }
}
