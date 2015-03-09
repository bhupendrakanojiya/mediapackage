<?php

namespace ChannelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Regions
 */
class Regions
{
    /**
     * @var string
     */
    private $region;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set region
     *
     * @param string $region
     * @return Regions
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string 
     */
    public function getRegion()
    {
        return $this->region;
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
