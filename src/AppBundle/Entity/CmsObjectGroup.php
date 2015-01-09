<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CmsObjectGroup
 *
 * @ORM\Table(name="cms_object_group")
 * @ORM\Entity
 */
class CmsObjectGroup
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fk_cms_object_parent_id", type="integer", nullable=true)
     */
    private $fkCmsObjectParentId;

    /**
     * @var integer
     *
     * @ORM\Column(name="fk_cms_object_parent_rev", type="integer", nullable=true)
     */
    private $fkCmsObjectParentRev;

    /**
     * @var integer
     *
     * @ORM\Column(name="fk_cms_object_child_id", type="integer", nullable=true)
     */
    private $fkCmsObjectChildId;

    /**
     * @var integer
     *
     * @ORM\Column(name="fk_cms_object_child_rev", type="integer", nullable=true)
     */
    private $fkCmsObjectChildRev;

    /**
     * @var string
     *
     * @ORM\Column(name="cms_object_group_position", type="string", length=255, nullable=true)
     */
    private $cmsObjectGroupPosition;

    /**
     * @var integer
     *
     * @ORM\Column(name="cms_object_group_priority", type="integer", nullable=true)
     */
    private $cmsObjectGroupPriority;

    /**
     * @var integer
     *
     * @ORM\Column(name="cms_object_group_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cmsObjectGroupId;



    /**
     * Set fkCmsObjectParentId
     *
     * @param integer $fkCmsObjectParentId
     * @return CmsObjectGroup
     */
    public function setFkCmsObjectParentId($fkCmsObjectParentId)
    {
        $this->fkCmsObjectParentId = $fkCmsObjectParentId;

        return $this;
    }

    /**
     * Get fkCmsObjectParentId
     *
     * @return integer 
     */
    public function getFkCmsObjectParentId()
    {
        return $this->fkCmsObjectParentId;
    }

    /**
     * Set fkCmsObjectParentRev
     *
     * @param integer $fkCmsObjectParentRev
     * @return CmsObjectGroup
     */
    public function setFkCmsObjectParentRev($fkCmsObjectParentRev)
    {
        $this->fkCmsObjectParentRev = $fkCmsObjectParentRev;

        return $this;
    }

    /**
     * Get fkCmsObjectParentRev
     *
     * @return integer 
     */
    public function getFkCmsObjectParentRev()
    {
        return $this->fkCmsObjectParentRev;
    }

    /**
     * Set fkCmsObjectChildId
     *
     * @param integer $fkCmsObjectChildId
     * @return CmsObjectGroup
     */
    public function setFkCmsObjectChildId($fkCmsObjectChildId)
    {
        $this->fkCmsObjectChildId = $fkCmsObjectChildId;

        return $this;
    }

    /**
     * Get fkCmsObjectChildId
     *
     * @return integer 
     */
    public function getFkCmsObjectChildId()
    {
        return $this->fkCmsObjectChildId;
    }

    /**
     * Set fkCmsObjectChildRev
     *
     * @param integer $fkCmsObjectChildRev
     * @return CmsObjectGroup
     */
    public function setFkCmsObjectChildRev($fkCmsObjectChildRev)
    {
        $this->fkCmsObjectChildRev = $fkCmsObjectChildRev;

        return $this;
    }

    /**
     * Get fkCmsObjectChildRev
     *
     * @return integer 
     */
    public function getFkCmsObjectChildRev()
    {
        return $this->fkCmsObjectChildRev;
    }

    /**
     * Set cmsObjectGroupPosition
     *
     * @param string $cmsObjectGroupPosition
     * @return CmsObjectGroup
     */
    public function setCmsObjectGroupPosition($cmsObjectGroupPosition)
    {
        $this->cmsObjectGroupPosition = $cmsObjectGroupPosition;

        return $this;
    }

    /**
     * Get cmsObjectGroupPosition
     *
     * @return string 
     */
    public function getCmsObjectGroupPosition()
    {
        return $this->cmsObjectGroupPosition;
    }

    /**
     * Set cmsObjectGroupPriority
     *
     * @param integer $cmsObjectGroupPriority
     * @return CmsObjectGroup
     */
    public function setCmsObjectGroupPriority($cmsObjectGroupPriority)
    {
        $this->cmsObjectGroupPriority = $cmsObjectGroupPriority;

        return $this;
    }

    /**
     * Get cmsObjectGroupPriority
     *
     * @return integer 
     */
    public function getCmsObjectGroupPriority()
    {
        return $this->cmsObjectGroupPriority;
    }

    /**
     * Get cmsObjectGroupId
     *
     * @return integer 
     */
    public function getCmsObjectGroupId()
    {
        return $this->cmsObjectGroupId;
    }
}
