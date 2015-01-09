<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CmsObject
 *
 * @ORM\Table(name="cms_object")
 * @ORM\Entity
 */
class CmsObject
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cms_object_date_created", type="datetime", nullable=true)
     */
    private $cmsObjectDateCreated;

    /**
     * @var integer
     *
     * @ORM\Column(name="fk_cms_object_category", type="integer", nullable=true)
     */
    private $fkCmsObjectCategory;

    /**
     * @var integer
     *
     * @ORM\Column(name="cms_object_counter", type="integer", nullable=true)
     */
    private $cmsObjectCounter;

    /**
     * @var string
     *
     * @ORM\Column(name="cms_object_owner", type="string", length=255, nullable=true)
     */
    private $cmsObjectOwner;

    /**
     * @var string
     *
     * @ORM\Column(name="cms_object_uuid", type="string", length=32, nullable=true)
     */
    private $cmsObjectUuid;

    /**
     * @var integer
     *
     * @ORM\Column(name="cms_object_live", type="integer", nullable=true)
     */
    private $cmsObjectLive;

    /**
     * @var integer
     *
     * @ORM\Column(name="cms_object_current_rev", type="integer", nullable=true)
     */
    private $cmsObjectCurrentRev;

    /**
     * @var integer
     *
     * @ORM\Column(name="cms_object_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cmsObjectId;



    /**
     * Set cmsObjectDateCreated
     *
     * @param \DateTime $cmsObjectDateCreated
     * @return CmsObject
     */
    public function setCmsObjectDateCreated($cmsObjectDateCreated)
    {
        $this->cmsObjectDateCreated = $cmsObjectDateCreated;

        return $this;
    }

    /**
     * Get cmsObjectDateCreated
     *
     * @return \DateTime 
     */
    public function getCmsObjectDateCreated()
    {
        return $this->cmsObjectDateCreated;
    }

    /**
     * Set fkCmsObjectCategory
     *
     * @param integer $fkCmsObjectCategory
     * @return CmsObject
     */
    public function setFkCmsObjectCategory($fkCmsObjectCategory)
    {
        $this->fkCmsObjectCategory = $fkCmsObjectCategory;

        return $this;
    }

    /**
     * Get fkCmsObjectCategory
     *
     * @return integer 
     */
    public function getFkCmsObjectCategory()
    {
        return $this->fkCmsObjectCategory;
    }

    /**
     * Set cmsObjectCounter
     *
     * @param integer $cmsObjectCounter
     * @return CmsObject
     */
    public function setCmsObjectCounter($cmsObjectCounter)
    {
        $this->cmsObjectCounter = $cmsObjectCounter;

        return $this;
    }

    /**
     * Get cmsObjectCounter
     *
     * @return integer 
     */
    public function getCmsObjectCounter()
    {
        return $this->cmsObjectCounter;
    }

    /**
     * Set cmsObjectOwner
     *
     * @param string $cmsObjectOwner
     * @return CmsObject
     */
    public function setCmsObjectOwner($cmsObjectOwner)
    {
        $this->cmsObjectOwner = $cmsObjectOwner;

        return $this;
    }

    /**
     * Get cmsObjectOwner
     *
     * @return string 
     */
    public function getCmsObjectOwner()
    {
        return $this->cmsObjectOwner;
    }

    /**
     * Set cmsObjectUuid
     *
     * @param string $cmsObjectUuid
     * @return CmsObject
     */
    public function setCmsObjectUuid($cmsObjectUuid)
    {
        $this->cmsObjectUuid = $cmsObjectUuid;

        return $this;
    }

    /**
     * Get cmsObjectUuid
     *
     * @return string 
     */
    public function getCmsObjectUuid()
    {
        return $this->cmsObjectUuid;
    }

    /**
     * Set cmsObjectLive
     *
     * @param integer $cmsObjectLive
     * @return CmsObject
     */
    public function setCmsObjectLive($cmsObjectLive)
    {
        $this->cmsObjectLive = $cmsObjectLive;

        return $this;
    }

    /**
     * Get cmsObjectLive
     *
     * @return integer 
     */
    public function getCmsObjectLive()
    {
        return $this->cmsObjectLive;
    }

    /**
     * Set cmsObjectCurrentRev
     *
     * @param integer $cmsObjectCurrentRev
     * @return CmsObject
     */
    public function setCmsObjectCurrentRev($cmsObjectCurrentRev)
    {
        $this->cmsObjectCurrentRev = $cmsObjectCurrentRev;

        return $this;
    }

    /**
     * Get cmsObjectCurrentRev
     *
     * @return integer 
     */
    public function getCmsObjectCurrentRev()
    {
        return $this->cmsObjectCurrentRev;
    }

    /**
     * Get cmsObjectId
     *
     * @return integer 
     */
    public function getCmsObjectId()
    {
        return $this->cmsObjectId;
    }
}
