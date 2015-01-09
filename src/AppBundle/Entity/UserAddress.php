<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserAddress
 *
 * @ORM\Table(name="user_address", indexes={@ORM\Index(name="fk_user_id", columns={"fk_user_id"})})
 * @ORM\Entity
 */
class UserAddress
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fk_user_id", type="integer", nullable=true)
     */
    private $fkUserId;

    /**
     * @var string
     *
     * @ORM\Column(name="user_phone", type="string", length=255, nullable=true)
     */
    private $userPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="user_address", type="string", length=255, nullable=true)
     */
    private $userAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="user_address_2", type="string", length=255, nullable=true)
     */
    private $userAddress2;

    /**
     * @var string
     *
     * @ORM\Column(name="user_city", type="string", length=255, nullable=true)
     */
    private $userCity;

    /**
     * @var string
     *
     * @ORM\Column(name="user_state", type="string", length=255, nullable=true)
     */
    private $userState;

    /**
     * @var string
     *
     * @ORM\Column(name="user_zip", type="string", length=255, nullable=true)
     */
    private $userZip;

    /**
     * @var string
     *
     * @ORM\Column(name="user_country", type="string", length=255, nullable=true)
     */
    private $userCountry;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_address_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userAddressId;



    /**
     * Set fkUserId
     *
     * @param integer $fkUserId
     * @return UserAddress
     */
    public function setFkUserId($fkUserId)
    {
        $this->fkUserId = $fkUserId;

        return $this;
    }

    /**
     * Get fkUserId
     *
     * @return integer 
     */
    public function getFkUserId()
    {
        return $this->fkUserId;
    }

    /**
     * Set userPhone
     *
     * @param string $userPhone
     * @return UserAddress
     */
    public function setUserPhone($userPhone)
    {
        $this->userPhone = $userPhone;

        return $this;
    }

    /**
     * Get userPhone
     *
     * @return string 
     */
    public function getUserPhone()
    {
        return $this->userPhone;
    }

    /**
     * Set userAddress
     *
     * @param string $userAddress
     * @return UserAddress
     */
    public function setUserAddress($userAddress)
    {
        $this->userAddress = $userAddress;

        return $this;
    }

    /**
     * Get userAddress
     *
     * @return string 
     */
    public function getUserAddress()
    {
        return $this->userAddress;
    }

    /**
     * Set userAddress2
     *
     * @param string $userAddress2
     * @return UserAddress
     */
    public function setUserAddress2($userAddress2)
    {
        $this->userAddress2 = $userAddress2;

        return $this;
    }

    /**
     * Get userAddress2
     *
     * @return string 
     */
    public function getUserAddress2()
    {
        return $this->userAddress2;
    }

    /**
     * Set userCity
     *
     * @param string $userCity
     * @return UserAddress
     */
    public function setUserCity($userCity)
    {
        $this->userCity = $userCity;

        return $this;
    }

    /**
     * Get userCity
     *
     * @return string 
     */
    public function getUserCity()
    {
        return $this->userCity;
    }

    /**
     * Set userState
     *
     * @param string $userState
     * @return UserAddress
     */
    public function setUserState($userState)
    {
        $this->userState = $userState;

        return $this;
    }

    /**
     * Get userState
     *
     * @return string 
     */
    public function getUserState()
    {
        return $this->userState;
    }

    /**
     * Set userZip
     *
     * @param string $userZip
     * @return UserAddress
     */
    public function setUserZip($userZip)
    {
        $this->userZip = $userZip;

        return $this;
    }

    /**
     * Get userZip
     *
     * @return string 
     */
    public function getUserZip()
    {
        return $this->userZip;
    }

    /**
     * Set userCountry
     *
     * @param string $userCountry
     * @return UserAddress
     */
    public function setUserCountry($userCountry)
    {
        $this->userCountry = $userCountry;

        return $this;
    }

    /**
     * Get userCountry
     *
     * @return string 
     */
    public function getUserCountry()
    {
        return $this->userCountry;
    }

    /**
     * Get userAddressId
     *
     * @return integer 
     */
    public function getUserAddressId()
    {
        return $this->userAddressId;
    }
}
