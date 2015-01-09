<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CmsObjectObjectKeyword
 *
 * @ORM\Table(name="cms_object_object_keyword")
 * @ORM\Entity
 */
class CmsObjectObjectKeyword
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
     * @ORM\Column(name="fk_cms_object_rev", type="integer", nullable=true)
     */
    private $fkCmsObjectRev;

    /**
     * @var integer
     *
     * @ORM\Column(name="fk_cms_object_keyword_id", type="integer", nullable=true)
     */
    private $fkCmsObjectKeywordId;

    /**
     * @var string
     *
     * @ORM\Column(name="cms_object_keyword_group", type="string", length=255, nullable=true)
     */
    private $cmsObjectKeywordGroup;

    /**
     * @var integer
     *
     * @ORM\Column(name="cms_object_object_keyword", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cmsObjectObjectKeyword;



    /**
     * Set fkCmsObjectId
     *
     * @param integer $fkCmsObjectId
     * @return CmsObjectObjectKeyword
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
     * Set fkCmsObjectRev
     *
     * @param integer $fkCmsObjectRev
     * @return CmsObjectObjectKeyword
     */
    public function setFkCmsObjectRev($fkCmsObjectRev)
    {
        $this->fkCmsObjectRev = $fkCmsObjectRev;

        return $this;
    }

    /**
     * Get fkCmsObjectRev
     *
     * @return integer 
     */
    public function getFkCmsObjectRev()
    {
        return $this->fkCmsObjectRev;
    }

    /**
     * Set fkCmsObjectKeywordId
     *
     * @param integer $fkCmsObjectKeywordId
     * @return CmsObjectObjectKeyword
     */
    public function setFkCmsObjectKeywordId($fkCmsObjectKeywordId)
    {
        $this->fkCmsObjectKeywordId = $fkCmsObjectKeywordId;

        return $this;
    }

    /**
     * Get fkCmsObjectKeywordId
     *
     * @return integer 
     */
    public function getFkCmsObjectKeywordId()
    {
        return $this->fkCmsObjectKeywordId;
    }

    /**
     * Set cmsObjectKeywordGroup
     *
     * @param string $cmsObjectKeywordGroup
     * @return CmsObjectObjectKeyword
     */
    public function setCmsObjectKeywordGroup($cmsObjectKeywordGroup)
    {
        $this->cmsObjectKeywordGroup = $cmsObjectKeywordGroup;

        return $this;
    }

    /**
     * Get cmsObjectKeywordGroup
     *
     * @return string 
     */
    public function getCmsObjectKeywordGroup()
    {
        return $this->cmsObjectKeywordGroup;
    }

    /**
     * Get cmsObjectObjectKeyword
     *
     * @return integer 
     */
    public function getCmsObjectObjectKeyword()
    {
        return $this->cmsObjectObjectKeyword;
    }
}
