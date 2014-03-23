<?php

namespace uos\uosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Student
 */
class Student {

    /**
     * @var string
     */
    private $studentid;

    /**
     * @var string
     */
    private $firstname;

    /**
     * @var string
     */
    private $lastname;

    /**
     * @var string
     */
    private $gender;

    /**
     * @var string
     */
    private $deptName;

    /**
     * @var integer
     */
    private $id;

    /**
     * Set studentid
     *
     * @param string $studentid
     * @return Student
     */
    public function setStudentid($studentid) {
        $this->studentid = $studentid;
        return $this;
    }

    /**
     * Get studentid
     *
     * @return string 
     */
    public function getStudentid() {
        return $this->studentid;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return Student
     */
    public function setFirstname($firstname) {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname() {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return Student
     */
    public function setLastname($lastname) {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname() {
        return $this->lastname;
    }

    /**
     * Set gender
     *
     * @param string $gender
     * @return Student
     */
    public function setGender($gender) {
        $this->gender = $gender;
        return $this;
    }

    /**
     * Get gender
     *
     * @return string 
     */
    public function getGender() {
        return $this->gender;
    }

    /**
     * Set deptName
     *
     * @param string $deptName
     * @return Student
     */
    public function setDeptName($deptName) {
        $this->deptName = $deptName;
        return $this;
    }

    /**
     * Get deptName
     *
     * @return string 
     */
    public function getDeptName() {
        return $this->deptName;
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
     * @var string
     */
    private $year;

    /**
     * Set year
     *
     * @param string $year
     * @return Student
     */
    public function setYear($year) {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return string 
     */
    public function getYear() {
        return $this->year;
    }

    public function __toString() {
        return "$this->studentid";
    }

    public static function loadValidatorMetadata(ClassMetadata $metadata) {
        // $addPropertyConstraint1 = $metadata->addPropertyConstraint('studentid', new NotBlank());
        // $addPropertyConstraint2 = $metadata->addPropertyConstraint('studentid', new Length(array("min">=7)));//,"max"<=7,'message'=>'should contain 6 integers followed by a character')));

        $metadata->addPropertyConstraint('firstname', new NotBlank());


        //unique id checking
        $metadata->addConstraint(new UniqueEntity(array(
                    'fields' => 'studentid',
                    'message' => 'This student id is already exists.',
                )));

        $metadata->addPropertyConstraint('firstname', new Assert\Length(array(
                    'min' => 3,
                    'max' => 20,
                    'minMessage' => 'Your first name must be at least {{ limit }} characters length',
                    'maxMessage' => 'Your first name cannot be longer than {{ limit }} characters length',
                )));

        $metadata->addPropertyConstraint('lastname', new Assert\Length(array(
                    'min' => 3,
                    'max' => 20,
                    'minMessage' => 'Your last name must be at least {{ limit }} characters length',
                    'maxMessage' => 'Your last name cannot be longer than {{ limit }} characters length',
                )));

        $metadata->addPropertyConstraint('gender', new Assert\Choice(array(
                    'choices' => array('male', 'Male', 'Female', 'female', 'FEMALE', 'MALE'),
                    'message' => 'Choose a valid gender from this category Male,Female',
                )));

        $metadata->addPropertyConstraint('deptName', new Assert\Choice(array(
                    'choices' => array('ENT', 'CSE', 'EE', 'CIVIL', 'ME', 'CE', 'MT', 'Ent', 'Cse', 'Ee', 'Civil', 'Me', 'Ce', 'Mt', 'ent', 'cse', 'ee', 'civil', 'me', 'ce', 'mt'),
                    'message' => 'Choose a valid department ENT,CSE,EE, CIVIL,ME,CE,MT',
                )));


        $metadata->addPropertyConstraint('year', new Assert\Choice(array(
                    //'type'=>'integer',
                    'choices' => array('2010', '2011', '2012', '2013', '2014'),
                    'message' => 'chech whether the year is between these values: (2010,2011,2012,2013,2014). if you still get the error please contact A2S ',
                )));



        // $metadata->addPropertyConstraint('studentid', new Assert\Studentid());
    }

}
