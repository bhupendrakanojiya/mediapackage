<?php

namespace ChannelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Channels
 */
class Channels
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var integer
     */
    private $active;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set title
     *
     * @param string $title
     * @return Channels
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set active
     *
     * @param integer $active
     * @return Channels
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return integer 
     */
    public function getActive()
    {
        return $this->active;
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
	//public function
	
}
