<?php

namespace uos\uosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Work
 */
class Work
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
     * @var \uos\uosBundle\Entity\Hall
     */
    private $hall;

    /**
     * @var \uos\uosBundle\Entity\Employee
     */
    private $employee;


    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Work
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
     * Set hall
     *
     * @param \uos\uosBundle\Entity\Hall $hall
     * @return Work
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
     * Set employee
     *
     * @param \uos\uosBundle\Entity\Employee $employee
     * @return Work
     */
    public function setEmployee(\uos\uosBundle\Entity\Employee $employee = null)
    {
        $this->employee = $employee;

        return $this;
    }

    /**
     * Get employee
     *
     * @return \uos\uosBundle\Entity\Employee 
     */
    public function getEmployee()
    {
        return $this->employee;
    }
}
