<?php

namespace ChannelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Packages
 */
class Packages
{
    /**
     * @var string
     */
    private $package;

    /**
     * @var string
     */
    private $abr;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set package
     *
     * @param string $package
     * @return Packages
     */
    public function setPackage($package)
    {
        $this->package = $package;

        return $this;
    }

    /**
     * Get package
     *
     * @return string 
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * Set abr
     *
     * @param string $abr
     * @return Packages
     */
    public function setAbr($abr)
    {
        $this->abr = $abr;

        return $this;
    }

    /**
     * Get abr
     *
     * @return string 
     */
    public function getAbr()
    {
        return $this->abr;
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
