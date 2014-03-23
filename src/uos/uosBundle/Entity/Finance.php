<?php

namespace uos\uosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Finance
 */
class Finance {

    /**
     * @var float
     */
    private $balance;

    /**
     * @var \DateTime
     */
    private $paydate;

    /**
     * @var float
     *
     */
    private $transferred;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \uos\uosBundle\Entity\Student
     */
    private $student;

    public static function loadValidatorMetadata(ClassMetadata $metadata) {
        // $addPropertyConstraint1 = $metadata->addPropertyConstraint('studentid', new NotBlank());
        // $addPropertyConstraint2 = $metadata->addPropertyConstraint('studentid', new Length(array("min">=7)));//,"max"<=7,'message'=>'should contain 6 integers followed by a character')));
    }

    /**
     * Set balance
     *
     * @param float $balance
     * @return Finance
     */
    public function setBalance($balance) {
        $this->balance = $balance;

        return $this;
    }

    /**
     * Get balance
     *
     * @return float 
     */
    public function getBalance() {
        return $this->balance;
    }

    /**
     * Set paydate
     *
     * @param \DateTime $paydate
     * @return Finance
     */
    public function setPaydate($paydate) {
        $this->paydate = $paydate;

        return $this;
    }

    /**
     * Get paydate
     *
     * @return \DateTime 
     */
    public function getPaydate() {
        return $this->paydate;
    }

    /**
     * Set transferred
     *
     * @param float $transferred
     * @return Finance
     */
    public function setTransferred($transferred) {
        $this->transferred = $transferred;

        return $this;
    }

    /**
     * Get transferred
     *
     * @return float 
     */
    public function getTransferred() {
        return $this->transferred;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set student
     *
     * @param \uos\uosBundle\Entity\Student $student
     * @return Finance
     */
    public function setStudent(\uos\uosBundle\Entity\Student $student = null) {
        $this->student = $student;

        return $this;
    }

    /**
     * Get student
     *
     * @return \uos\uosBundle\Entity\Student 
     */
    public function getStudent() {
        return $this->student;
    }

}
