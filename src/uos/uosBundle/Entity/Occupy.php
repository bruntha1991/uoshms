<?php

namespace uos\uosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Occupy
 */
class Occupy
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \uos\uosBundle\Entity\Room
     */
    private $room;

    /**
     * @var \uos\uosBundle\Entity\Hall
     */
    private $hall;

    /**
     * @var \uos\uosBundle\Entity\Student
     */
    private $student;


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
     * Set room
     *
     * @param \uos\uosBundle\Entity\Room $room
     * @return Occupy
     */
    public function setRoom(\uos\uosBundle\Entity\Room $room = null)
    {
        $this->room = $room;

        return $this;
    }

    /**
     * Get room
     *
     * @return \uos\uosBundle\Entity\Room 
     */
    public function getRoom()
    {
        return $this->room;
    }

    /**
     * Set hall
     *
     * @param \uos\uosBundle\Entity\Hall $hall
     * @return Occupy
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

    /**
     * Set student
     *
     * @param \uos\uosBundle\Entity\Student $student
     * @return Occupy
     */
    public function setStudent(\uos\uosBundle\Entity\Student $student = null)
    {
        $this->student = $student;

        return $this;
    }

    /**
     * Get student
     *
     * @return \uos\uosBundle\Entity\Student 
     */
    public function getStudent()
    {
        return $this->student;
    }
        
    
}
