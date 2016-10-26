<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sensor
 *
 * @ORM\Table(name="sensor")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SensorRepository")
 */
class Sensor
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="displayName", type="string", length=255, unique=true)
     */
    private $displayName;

    /**
     * @var int
     *
     * @ORM\Column(name="vendor", type="integer")
     */
    private $vendor;

    /**
     * @var int
     *
     * @ORM\Column(name="product", type="integer")
     */
    private $product;

    /**
     * @var int
     *
     * @ORM\Column(name="version", type="integer")
     */
    private $version;

    /**
     * @var bool
     *
     * @ORM\Column(name="enable", type="boolean")
     */
    private $enable;

    /**
     * @ORM\OneToOne(targetEntity="User", inversedBy="sensor")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;  


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set displayName
     *
     * @param string $displayName
     * @return Sensor
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;

        return $this;
    }

    /**
     * Get displayName
     *
     * @return string 
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * Set vendor
     *
     * @param integer $vendor
     * @return Sensor
     */
    public function setVendor($vendor)
    {
        $this->vendor = $vendor;

        return $this;
    }

    /**
     * Get vendor
     *
     * @return integer 
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * Set product
     *
     * @param integer $product
     * @return Sensor
     */
    public function setProduct($product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return integer 
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set version
     *
     * @param integer $version
     * @return Sensor
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return integer 
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set enable
     *
     * @param boolean $enable
     * @return Sensor
     */
    public function setEnable($enable)
    {
        $this->enable = $enable;

        return $this;
    }

    /**
     * Get enable
     *
     * @return boolean 
     */
    public function getEnable()
    {
        return $this->enable;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     * @return Sensor
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
