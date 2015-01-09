<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CmsObjectKeyword
 *
 * @ORM\Table(name="cms_object_keyword")
 * @ORM\Entity
 */
class CmsObjectKeyword
{
    /**
     * @var string
     *
     * @ORM\Column(name="cms_object_keyword_name", type="string", length=255, nullable=true)
     */
    private $cmsObjectKeywordName;

    /**
     * @var string
     *
     * @ORM\Column(name="cms_object_keyword_description", type="text", length=65535, nullable=true)
     */
    private $cmsObjectKeywordDescription;

    /**
     * @var integer
     *
     * @ORM\Column(name="fk_object_id", type="integer", nullable=true)
     */
    private $fkObjectId;

    /**
     * @var integer
     *
     * @ORM\Column(name="fk_cms_object_category", type="integer", nullable=true)
     */
    private $fkCmsObjectCategory;

    /**
     * @var integer
     *
     * @ORM\Column(name="cms_object_keyword_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cmsObjectKeywordId;



    /**
     * Set cmsObjectKeywordName
     *
     * @param string $cmsObjectKeywordName
     * @return CmsObjectKeyword
     */
    public function setCmsObjectKeywordName($cmsObjectKeywordName)
    {
        $this->cmsObjectKeywordName = $cmsObjectKeywordName;

        return $this;
    }

    /**
     * Get cmsObjectKeywordName
     *
     * @return string 
     */
    public function getCmsObjectKeywordName()
    {
        return $this->cmsObjectKeywordName;
    }

    /**
     * Set cmsObjectKeywordDescription
     *
     * @param string $cmsObjectKeywordDescription
     * @return CmsObjectKeyword
     */
    public function setCmsObjectKeywordDescription($cmsObjectKeywordDescription)
    {
        $this->cmsObjectKeywordDescription = $cmsObjectKeywordDescription;

        return $this;
    }

    /**
     * Get cmsObjectKeywordDescription
     *
     * @return string 
     */
    public function getCmsObjectKeywordDescription()
    {
        return $this->cmsObjectKeywordDescription;
    }

    /**
     * Set fkObjectId
     *
     * @param integer $fkObjectId
     * @return CmsObjectKeyword
     */
    public function setFkObjectId($fkObjectId)
    {
        $this->fkObjectId = $fkObjectId;

        return $this;
    }

    /**
     * Get fkObjectId
     *
     * @return integer 
     */
    public function getFkObjectId()
    {
        return $this->fkObjectId;
    }

    /**
     * Set fkCmsObjectCategory
     *
     * @param integer $fkCmsObjectCategory
     * @return CmsObjectKeyword
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
     * Get cmsObjectKeywordId
     *
     * @return integer 
     */
    public function getCmsObjectKeywordId()
    {
        return $this->cmsObjectKeywordId;
    }
}
