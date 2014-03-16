<?php

namespace uos\uosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Finance
 */
class Finance
{
    /**
     * @var float
     */
    private $balance;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \uos\uosBundle\Entity\Student
     */
    private $student;


    /**
     * Set balance
     *
     * @param float $balance
     * @return Finance
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;

        return $this;
    }

    /**
     * Get balance
     *
     * @return float 
     */
    public function getBalance()
    {
        return $this->balance;
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
     * @return Finance
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
