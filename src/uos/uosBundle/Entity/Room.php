<?php

namespace uos\uosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Room
 */
class Room
{
    /**
     * @var integer
     */
    private $roomno;

    /**
     * @var string
     */
    private $type;

    /**
     * @var float
     */
    private $monthlycost;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \uos\uosBundle\Entity\Hall
     */
    private $hall;


    /**
     * Set roomno
     *
     * @param integer $roomno
     * @return Room
     */
    public function setRoomno($roomno)
    {
        $this->roomno = $roomno;

        return $this;
    }

    /**
     * Get roomno
     *
     * @return integer 
     */
    public function getRoomno()
    {
        return $this->roomno;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Room
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set monthlycost
     *
     * @param float $monthlycost
     * @return Room
     */
    public function setMonthlycost($monthlycost)
    {
        $this->monthlycost = $monthlycost;

        return $this;
    }

    /**
     * Get monthlycost
     *
     * @return float 
     */
    public function getMonthlycost()
    {
        return $this->monthlycost;
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

    /**
     * Set hall
     *
     * @param \uos\uosBundle\Entity\Hall $hall
     * @return Room
     */
    public function setHall(\uos\uosBundle\Entity\Hall $hall = null)
    {
        $this->hall = $hall;

        return $this;
    }

    /**
     * Get hall
     *
     * @return \uos\uosBundle\Entity\Hall 
     */
    public function getHall()
    {
        return $this->hall;
    }
}
