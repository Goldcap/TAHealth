<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CmsObjectSearchRule
 *
 * @ORM\Table(name="cms_object_search_rule")
 * @ORM\Entity
 */
class CmsObjectSearchRule
{
    /**
     * @var string
     *
     * @ORM\Column(name="search_rule_name", type="string", length=255, nullable=true)
     */
    private $searchRuleName;

    /**
     * @var string
     *
     * @ORM\Column(name="search_rule", type="string", length=255, nullable=true)
     */
    private $searchRule;

    /**
     * @var string
     *
     * @ORM\Column(name="search_rule_sql", type="string", length=255, nullable=true)
     */
    private $searchRuleSql;

    /**
     * @var integer
     *
     * @ORM\Column(name="search_rule_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $searchRuleId;



    /**
     * Set searchRuleName
     *
     * @param string $searchRuleName
     * @return CmsObjectSearchRule
     */
    public function setSearchRuleName($searchRuleName)
    {
        $this->searchRuleName = $searchRuleName;

        return $this;
    }

    /**
     * Get searchRuleName
     *
     * @return string 
     */
    public function getSearchRuleName()
    {
        return $this->searchRuleName;
    }

    /**
     * Set searchRule
     *
     * @param string $searchRule
     * @return CmsObjectSearchRule
     */
    public function setSearchRule($searchRule)
    {
        $this->searchRule = $searchRule;

        return $this;
    }

    /**
     * Get searchRule
     *
     * @return string 
     */
    public function getSearchRule()
    {
        return $this->searchRule;
    }

    /**
     * Set searchRuleSql
     *
     * @param string $searchRuleSql
     * @return CmsObjectSearchRule
     */
    public function setSearchRuleSql($searchRuleSql)
    {
        $this->searchRuleSql = $searchRuleSql;

        return $this;
    }

    /**
     * Get searchRuleSql
     *
     * @return string 
     */
    public function getSearchRuleSql()
    {
        return $this->searchRuleSql;
    }

    /**
     * Get searchRuleId
     *
     * @return integer 
     */
    public function getSearchRuleId()
    {
        return $this->searchRuleId;
    }
}
