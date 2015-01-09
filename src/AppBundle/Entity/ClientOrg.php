<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClientOrg
 *
 * @ORM\Table(name="client_org")
 * @ORM\Entity
 */
class ClientOrg
{
    /**
     * @var string
     *
     * @ORM\Column(name="client_org_name", type="string", length=255, nullable=true)
     */
    private $clientOrgName;

    /**
     * @var integer
     *
     * @ORM\Column(name="fk_client_org_admin_id", type="integer", nullable=true)
     */
    private $fkClientOrgAdminId;

    /**
     * @var integer
     *
     * @ORM\Column(name="client_org_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $clientOrgId;



    /**
     * Set clientOrgName
     *
     * @param string $clientOrgName
     * @return ClientOrg
     */
    public function setClientOrgName($clientOrgName)
    {
        $this->clientOrgName = $clientOrgName;

        return $this;
    }

    /**
     * Get clientOrgName
     *
     * @return string 
     */
    public function getClientOrgName()
    {
        return $this->clientOrgName;
    }

    /**
     * Set fkClientOrgAdminId
     *
     * @param integer $fkClientOrgAdminId
     * @return ClientOrg
     */
    public function setFkClientOrgAdminId($fkClientOrgAdminId)
    {
        $this->fkClientOrgAdminId = $fkClientOrgAdminId;

        return $this;
    }

    /**
     * Get fkClientOrgAdminId
     *
     * @return integer 
     */
    public function getFkClientOrgAdminId()
    {
        return $this->fkClientOrgAdminId;
    }

    /**
     * Get clientOrgId
     *
     * @return integer 
     */
    public function getClientOrgId()
    {
        return $this->clientOrgId;
    }
}
