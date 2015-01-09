<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CmsObjectCategory
 *
 * @ORM\Table(name="cms_object_category")
 * @ORM\Entity
 */
class CmsObjectCategory
{
    /**
     * @var string
     *
     * @ORM\Column(name="cms_object_category_name", type="string", length=255, nullable=true)
     */
    private $cmsObjectCategoryName;

    /**
     * @var integer
     *
     * @ORM\Column(name="cms_object_category_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cmsObjectCategoryId;



    /**
     * Set cmsObjectCategoryName
     *
     * @param string $cmsObjectCategoryName
     * @return CmsObjectCategory
     */
    public function setCmsObjectCategoryName($cmsObjectCategoryName)
    {
        $this->cmsObjectCategoryName = $cmsObjectCategoryName;

        return $this;
    }

    /**
     * Get cmsObjectCategoryName
     *
     * @return string 
     */
    public function getCmsObjectCategoryName()
    {
        return $this->cmsObjectCategoryName;
    }

    /**
     * Get cmsObjectCategoryId
     *
     * @return integer 
     */
    public function getCmsObjectCategoryId()
    {
        return $this->cmsObjectCategoryId;
    }
}
