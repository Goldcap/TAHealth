<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdminUser
 *
 * @ORM\Table(name="admin_user")
 * @ORM\Entity
 */
class AdminUser
{
    /**
     * @var string
     *
     * @ORM\Column(name="admin_user_fname", type="string", length=255, nullable=true)
     */
    private $adminUserFname;

    /**
     * @var string
     *
     * @ORM\Column(name="admin_user_lname", type="string", length=255, nullable=true)
     */
    private $adminUserLname;

    /**
     * @var string
     *
     * @ORM\Column(name="admin_user_email", type="string", length=255, nullable=true)
     */
    private $adminUserEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="admin_user_password", type="string", length=255, nullable=true)
     */
    private $adminUserPassword;

    /**
     * @var string
     *
     * @ORM\Column(name="admin_user_ual", type="string", length=255, nullable=true)
     */
    private $adminUserUal;

    /**
     * @var string
     *
     * @ORM\Column(name="admin_user_phone", type="string", length=255, nullable=true)
     */
    private $adminUserPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="admin_user_cell", type="string", length=255, nullable=true)
     */
    private $adminUserCell;

    /**
     * @var integer
     *
     * @ORM\Column(name="admin_user_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $adminUserId;



    /**
     * Set adminUserFname
     *
     * @param string $adminUserFname
     * @return AdminUser
     */
    public function setAdminUserFname($adminUserFname)
    {
        $this->adminUserFname = $adminUserFname;

        return $this;
    }

    /**
     * Get adminUserFname
     *
     * @return string 
     */
    public function getAdminUserFname()
    {
        return $this->adminUserFname;
    }

    /**
     * Set adminUserLname
     *
     * @param string $adminUserLname
     * @return AdminUser
     */
    public function setAdminUserLname($adminUserLname)
    {
        $this->adminUserLname = $adminUserLname;

        return $this;
    }

    /**
     * Get adminUserLname
     *
     * @return string 
     */
    public function getAdminUserLname()
    {
        return $this->adminUserLname;
    }

    /**
     * Set adminUserEmail
     *
     * @param string $adminUserEmail
     * @return AdminUser
     */
    public function setAdminUserEmail($adminUserEmail)
    {
        $this->adminUserEmail = $adminUserEmail;

        return $this;
    }

    /**
     * Get adminUserEmail
     *
     * @return string 
     */
    public function getAdminUserEmail()
    {
        return $this->adminUserEmail;
    }

    /**
     * Set adminUserPassword
     *
     * @param string $adminUserPassword
     * @return AdminUser
     */
    public function setAdminUserPassword($adminUserPassword)
    {
        $this->adminUserPassword = $adminUserPassword;

        return $this;
    }

    /**
     * Get adminUserPassword
     *
     * @return string 
     */
    public function getAdminUserPassword()
    {
        return $this->adminUserPassword;
    }

    /**
     * Set adminUserUal
     *
     * @param string $adminUserUal
     * @return AdminUser
     */
    public function setAdminUserUal($adminUserUal)
    {
        $this->adminUserUal = $adminUserUal;

        return $this;
    }

    /**
     * Get adminUserUal
     *
     * @return string 
     */
    public function getAdminUserUal()
    {
        return $this->adminUserUal;
    }

    /**
     * Set adminUserPhone
     *
     * @param string $adminUserPhone
     * @return AdminUser
     */
    public function setAdminUserPhone($adminUserPhone)
    {
        $this->adminUserPhone = $adminUserPhone;

        return $this;
    }

    /**
     * Get adminUserPhone
     *
     * @return string 
     */
    public function getAdminUserPhone()
    {
        return $this->adminUserPhone;
    }

    /**
     * Set adminUserCell
     *
     * @param string $adminUserCell
     * @return AdminUser
     */
    public function setAdminUserCell($adminUserCell)
    {
        $this->adminUserCell = $adminUserCell;

        return $this;
    }

    /**
     * Get adminUserCell
     *
     * @return string 
     */
    public function getAdminUserCell()
    {
        return $this->adminUserCell;
    }

    /**
     * Get adminUserId
     *
     * @return integer 
     */
    public function getAdminUserId()
    {
        return $this->adminUserId;
    }
}
