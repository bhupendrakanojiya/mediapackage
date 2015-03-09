<?php

namespace ChannelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChannelMapping
 */
class ChannelMapping
{
    /**
     * @var integer
     */
    private $channelId;

    /**
     * @var string
     */
    private $packageAbc;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set channelId
     *
     * @param integer $channelId
     * @return ChannelMapping
     */
    public function setChannelId($channelId)
    {
        $this->channelId = $channelId;

        return $this;
    }

    /**
     * Get channelId
     *
     * @return integer 
     */
    public function getChannelId()
    {
        return $this->channelId;
    }

    /**
     * Set packageAbc
     *
     * @param string $packageAbc
     * @return ChannelMapping
     */
    public function setPackageAbc($packageAbc)
    {
        $this->packageAbc = $packageAbc;

        return $this;
    }

    /**
     * Get packageAbc
     *
     * @return string 
     */
    public function getPackageAbc()
    {
        return $this->packageAbc;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
