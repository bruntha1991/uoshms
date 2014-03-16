<?php

namespace uos\uosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Occupy
 */
class Occupy
{
    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \uos\uosBundle\Entity\Student
     */
    private $student;

    /**
     * @var \uos\uosBundle\Entity\Room
     */
    private $room;

    /**
     * @var \uos\uosBundle\Entity\Hall
     */
    private $hall;


    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Occupy
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
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
}
