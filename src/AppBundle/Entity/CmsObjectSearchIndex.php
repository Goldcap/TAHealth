<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CmsObjectSearchIndex
 *
 * @ORM\Table(name="cms_object_search_index")
 * @ORM\Entity
 */
class CmsObjectSearchIndex
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fk_cms_object_id", type="integer", nullable=true)
     */
    private $fkCmsObjectId;

    /**
     * @var string
     *
     * @ORM\Column(name="cms_object_word", type="string", length=255, nullable=true)
     */
    private $cmsObjectWord;

    /**
     * @var string
     *
     * @ORM\Column(name="cms_object_weight", type="string", length=255, nullable=true)
     */
    private $cmsObjectWeight;

    /**
     * @var integer
     *
     * @ORM\Column(name="fk_cms_object_rev", type="integer", nullable=true)
     */
    private $fkCmsObjectRev;

    /**
     * @var integer
     *
     * @ORM\Column(name="cms_object_search_index_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cmsObjectSearchIndexId;



    /**
     * Set fkCmsObjectId
     *
     * @param integer $fkCmsObjectId
     * @return CmsObjectSearchIndex
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
     * Set cmsObjectWord
     *
     * @param string $cmsObjectWord
     * @return CmsObjectSearchIndex
     */
    public function setCmsObjectWord($cmsObjectWord)
    {
        $this->cmsObjectWord = $cmsObjectWord;

        return $this;
    }

    /**
     * Get cmsObjectWord
     *
     * @return string 
     */
    public function getCmsObjectWord()
    {
        return $this->cmsObjectWord;
    }

    /**
     * Set cmsObjectWeight
     *
     * @param string $cmsObjectWeight
     * @return CmsObjectSearchIndex
     */
    public function setCmsObjectWeight($cmsObjectWeight)
    {
        $this->cmsObjectWeight = $cmsObjectWeight;

        return $this;
    }

    /**
     * Get cmsObjectWeight
     *
     * @return string 
     */
    public function getCmsObjectWeight()
    {
        return $this->cmsObjectWeight;
    }

    /**
     * Set fkCmsObjectRev
     *
     * @param integer $fkCmsObjectRev
     * @return CmsObjectSearchIndex
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
     * Get cmsObjectSearchIndexId
     *
     * @return integer 
     */
    public function getCmsObjectSearchIndexId()
    {
        return $this->cmsObjectSearchIndexId;
    }
}
