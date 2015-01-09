<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User
{
    /**
     * @var string
     *
     * @ORM\Column(name="user_fname", type="string", length=64, nullable=true)
     */
    private $userFname;

    /**
     * @var string
     *
     * @ORM\Column(name="user_lname", type="string", length=64, nullable=true)
     */
    private $userLname;

    /**
     * @var string
     *
     * @ORM\Column(name="user_email", type="string", length=127, nullable=false)
     */
    private $userEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="user_nickname", type="string", length=255, nullable=true)
     */
    private $userNickname;

    /**
     * @var string
     *
     * @ORM\Column(name="user_password", type="string", length=255, nullable=true)
     */
    private $userPassword;

    /**
     * @var string
     *
     * @ORM\Column(name="user_password_legacy", type="string", length=30, nullable=true)
     */
    private $userPasswordLegacy;

    /**
     * @var string
     *
     * @ORM\Column(name="user_key", type="string", length=255, nullable=true)
     */
    private $userKey;

    /**
     * @var string
     *
     * @ORM\Column(name="user_ual", type="string", length=255, nullable=true)
     */
    private $userUal;

    /**
     * @var string
     *
     * @ORM\Column(name="user_notes", type="text", length=65535, nullable=true)
     */
    private $userNotes;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_enabled", type="integer", nullable=false)
     */
    private $userEnabled;

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_auto_account", type="boolean", nullable=true)
     */
    private $userAutoAccount;

    /**
     * @var string
     *
     * @ORM\Column(name="user_last_ip_address", type="string", length=15, nullable=true)
     */
    private $userLastIpAddress;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="user_last_login_date", type="datetime", nullable=true)
     */
    private $userLastLoginDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="fk_site_id", type="integer", nullable=true)
     */
    private $fkSiteId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_is_valid_email", type="boolean", nullable=true)
     */
    private $userIsValidEmail;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="user_date_joined", type="datetime", nullable=true)
     */
    private $userDateJoined;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pConvert", type="boolean", nullable=true)
     */
    private $pconvert;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userId;



    /**
     * Set userFname
     *
     * @param string $userFname
     * @return User
     */
    public function setUserFname($userFname)
    {
        $this->userFname = $userFname;

        return $this;
    }

    /**
     * Get userFname
     *
     * @return string 
     */
    public function getUserFname()
    {
        return $this->userFname;
    }

    /**
     * Set userLname
     *
     * @param string $userLname
     * @return User
     */
    public function setUserLname($userLname)
    {
        $this->userLname = $userLname;

        return $this;
    }

    /**
     * Get userLname
     *
     * @return string 
     */
    public function getUserLname()
    {
        return $this->userLname;
    }

    /**
     * Set userEmail
     *
     * @param string $userEmail
     * @return User
     */
    public function setUserEmail($userEmail)
    {
        $this->userEmail = $userEmail;

        return $this;
    }

    /**
     * Get userEmail
     *
     * @return string 
     */
    public function getUserEmail()
    {
        return $this->userEmail;
    }

    /**
     * Set userNickname
     *
     * @param string $userNickname
     * @return User
     */
    public function setUserNickname($userNickname)
    {
        $this->userNickname = $userNickname;

        return $this;
    }

    /**
     * Get userNickname
     *
     * @return string 
     */
    public function getUserNickname()
    {
        return $this->userNickname;
    }

    /**
     * Set userPassword
     *
     * @param string $userPassword
     * @return User
     */
    public function setUserPassword($userPassword)
    {
        $this->userPassword = $userPassword;

        return $this;
    }

    /**
     * Get userPassword
     *
     * @return string 
     */
    public function getUserPassword()
    {
        return $this->userPassword;
    }

    /**
     * Set userPasswordLegacy
     *
     * @param string $userPasswordLegacy
     * @return User
     */
    public function setUserPasswordLegacy($userPasswordLegacy)
    {
        $this->userPasswordLegacy = $userPasswordLegacy;

        return $this;
    }

    /**
     * Get userPasswordLegacy
     *
     * @return string 
     */
    public function getUserPasswordLegacy()
    {
        return $this->userPasswordLegacy;
    }

    /**
     * Set userKey
     *
     * @param string $userKey
     * @return User
     */
    public function setUserKey($userKey)
    {
        $this->userKey = $userKey;

        return $this;
    }

    /**
     * Get userKey
     *
     * @return string 
     */
    public function getUserKey()
    {
        return $this->userKey;
    }

    /**
     * Set userUal
     *
     * @param string $userUal
     * @return User
     */
    public function setUserUal($userUal)
    {
        $this->userUal = $userUal;

        return $this;
    }

    /**
     * Get userUal
     *
     * @return string 
     */
    public function getUserUal()
    {
        return $this->userUal;
    }

    /**
     * Set userNotes
     *
     * @param string $userNotes
     * @return User
     */
    public function setUserNotes($userNotes)
    {
        $this->userNotes = $userNotes;

        return $this;
    }

    /**
     * Get userNotes
     *
     * @return string 
     */
    public function getUserNotes()
    {
        return $this->userNotes;
    }

    /**
     * Set userEnabled
     *
     * @param integer $userEnabled
     * @return User
     */
    public function setUserEnabled($userEnabled)
    {
        $this->userEnabled = $userEnabled;

        return $this;
    }

    /**
     * Get userEnabled
     *
     * @return integer 
     */
    public function getUserEnabled()
    {
        return $this->userEnabled;
    }

    /**
     * Set userAutoAccount
     *
     * @param boolean $userAutoAccount
     * @return User
     */
    public function setUserAutoAccount($userAutoAccount)
    {
        $this->userAutoAccount = $userAutoAccount;

        return $this;
    }

    /**
     * Get userAutoAccount
     *
     * @return boolean 
     */
    public function getUserAutoAccount()
    {
        return $this->userAutoAccount;
    }

    /**
     * Set userLastIpAddress
     *
     * @param string $userLastIpAddress
     * @return User
     */
    public function setUserLastIpAddress($userLastIpAddress)
    {
        $this->userLastIpAddress = $userLastIpAddress;

        return $this;
    }

    /**
     * Get userLastIpAddress
     *
     * @return string 
     */
    public function getUserLastIpAddress()
    {
        return $this->userLastIpAddress;
    }

    /**
     * Set userLastLoginDate
     *
     * @param \DateTime $userLastLoginDate
     * @return User
     */
    public function setUserLastLoginDate($userLastLoginDate)
    {
        $this->userLastLoginDate = $userLastLoginDate;

        return $this;
    }

    /**
     * Get userLastLoginDate
     *
     * @return \DateTime 
     */
    public function getUserLastLoginDate()
    {
        return $this->userLastLoginDate;
    }

    /**
     * Set fkSiteId
     *
     * @param integer $fkSiteId
     * @return User
     */
    public function setFkSiteId($fkSiteId)
    {
        $this->fkSiteId = $fkSiteId;

        return $this;
    }

    /**
     * Get fkSiteId
     *
     * @return integer 
     */
    public function getFkSiteId()
    {
        return $this->fkSiteId;
    }

    /**
     * Set userIsValidEmail
     *
     * @param boolean $userIsValidEmail
     * @return User
     */
    public function setUserIsValidEmail($userIsValidEmail)
    {
        $this->userIsValidEmail = $userIsValidEmail;

        return $this;
    }

    /**
     * Get userIsValidEmail
     *
     * @return boolean 
     */
    public function getUserIsValidEmail()
    {
        return $this->userIsValidEmail;
    }

    /**
     * Set userDateJoined
     *
     * @param \DateTime $userDateJoined
     * @return User
     */
    public function setUserDateJoined($userDateJoined)
    {
        $this->userDateJoined = $userDateJoined;

        return $this;
    }

    /**
     * Get userDateJoined
     *
     * @return \DateTime 
     */
    public function getUserDateJoined()
    {
        return $this->userDateJoined;
    }

    /**
     * Set pconvert
     *
     * @param boolean $pconvert
     * @return User
     */
    public function setPconvert($pconvert)
    {
        $this->pconvert = $pconvert;

        return $this;
    }

    /**
     * Get pconvert
     *
     * @return boolean 
     */
    public function getPconvert()
    {
        return $this->pconvert;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }
}
