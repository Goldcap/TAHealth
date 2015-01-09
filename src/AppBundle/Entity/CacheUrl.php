<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CacheUrl
 *
 * @ORM\Table(name="cache_url")
 * @ORM\Entity
 */
class CacheUrl
{
    /**
     * @var string
     *
     * @ORM\Column(name="cache_url", type="string", length=255, nullable=true)
     */
    private $cacheUrl;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cache_date", type="datetime", nullable=true)
     */
    private $cacheDate;

    /**
     * @var string
     *
     * @ORM\Column(name="cache_host", type="string", length=255, nullable=true)
     */
    private $cacheHost;

    /**
     * @var float
     *
     * @ORM\Column(name="cache_build_time", type="float", precision=10, scale=0, nullable=true)
     */
    private $cacheBuildTime;

    /**
     * @var string
     *
     * @ORM\Column(name="cache_browser", type="string", length=255, nullable=true)
     */
    private $cacheBrowser;

    /**
     * @var integer
     *
     * @ORM\Column(name="cache_url_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cacheUrlId;



    /**
     * Set cacheUrl
     *
     * @param string $cacheUrl
     * @return CacheUrl
     */
    public function setCacheUrl($cacheUrl)
    {
        $this->cacheUrl = $cacheUrl;

        return $this;
    }

    /**
     * Get cacheUrl
     *
     * @return string 
     */
    public function getCacheUrl()
    {
        return $this->cacheUrl;
    }

    /**
     * Set cacheDate
     *
     * @param \DateTime $cacheDate
     * @return CacheUrl
     */
    public function setCacheDate($cacheDate)
    {
        $this->cacheDate = $cacheDate;

        return $this;
    }

    /**
     * Get cacheDate
     *
     * @return \DateTime 
     */
    public function getCacheDate()
    {
        return $this->cacheDate;
    }

    /**
     * Set cacheHost
     *
     * @param string $cacheHost
     * @return CacheUrl
     */
    public function setCacheHost($cacheHost)
    {
        $this->cacheHost = $cacheHost;

        return $this;
    }

    /**
     * Get cacheHost
     *
     * @return string 
     */
    public function getCacheHost()
    {
        return $this->cacheHost;
    }

    /**
     * Set cacheBuildTime
     *
     * @param float $cacheBuildTime
     * @return CacheUrl
     */
    public function setCacheBuildTime($cacheBuildTime)
    {
        $this->cacheBuildTime = $cacheBuildTime;

        return $this;
    }

    /**
     * Get cacheBuildTime
     *
     * @return float 
     */
    public function getCacheBuildTime()
    {
        return $this->cacheBuildTime;
    }

    /**
     * Set cacheBrowser
     *
     * @param string $cacheBrowser
     * @return CacheUrl
     */
    public function setCacheBrowser($cacheBrowser)
    {
        $this->cacheBrowser = $cacheBrowser;

        return $this;
    }

    /**
     * Get cacheBrowser
     *
     * @return string 
     */
    public function getCacheBrowser()
    {
        return $this->cacheBrowser;
    }

    /**
     * Get cacheUrlId
     *
     * @return integer 
     */
    public function getCacheUrlId()
    {
        return $this->cacheUrlId;
    }
}
