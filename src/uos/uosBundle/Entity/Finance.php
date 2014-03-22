<?php

namespace uos\uosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Finance
 */
class Finance
{
    //hi
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
    /**
     * @var \DateTime
     */
    private $paydate;

    /**
     * @var \uos\uosBundle\Entity\Occupy
     */
    private $occupy;


    /**
     * Set paydate
     *
     * @param \DateTime $paydate
     * @return Finance
     */
    public function setPaydate($paydate)
    {
        $this->paydate = $paydate;

        return $this;
    }

    /**
     * Get paydate
     *
     * @return \DateTime 
     */
    public function getPaydate()
    {
        return $this->paydate;
    }

    /**
     * Set occupy
     *
     * @param \uos\uosBundle\Entity\Occupy $occupy
     * @return Finance
     */
    public function setOccupy(\uos\uosBundle\Entity\Occupy $occupy = null)
    {
        $this->occupy = $occupy;

        return $this;
    }

    /**
     * Get occupy
     *
     * @return \uos\uosBundle\Entity\Occupy 
     */
    public function getOccupy()
    {
        return $this->occupy;
    }
    /**
     * @var float
     */
    private $transferred;


    /**
     * Set transferred
     *
     * @param float $transferred
     * @return Finance
     */
    public function setTransferred($transferred)
    {
        $this->transferred = $transferred;

        return $this;
    }

    /**
     * Get transferred
     *
     * @return float 
     */
    public function getTransferred()
    {
        return $this->transferred;
    }
    /**
     * @var integer
     */
    private $studentId;


    /**
     * Set studentId
     *
     * @param integer $studentId
     * @return Finance
     */
    public function setStudentId($studentId)
    {
        $this->studentId = $studentId;

        return $this;
    }

    /**
     * Get studentId
     *
     * @return integer 
     */
    public function getStudentId()
    {
        return $this->studentId;
    }
}
