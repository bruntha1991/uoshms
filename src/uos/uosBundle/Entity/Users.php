<?php

namespace uos\uosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 */
class Users
{
    /**
     * @var string
     */
    private $user;

    /**
     * @var string
     */
    private $role;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $firstname;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \uos\uosBundle\Entity\Student
     */
    private $firstnameStd;

    /**
     * @var \uos\uosBundle\Entity\Employee
     */
    private $firsrnameEmp;


    /**
     * Set user
     *
     * @param string $user
     * @return Users
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return string 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set role
     *
     * @param string $role
     * @return Users
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string 
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Users
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return Users
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
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
     * Set firstnameStd
     *
     * @param \uos\uosBundle\Entity\Student $firstnameStd
     * @return Users
     */
    public function setFirstnameStd(\uos\uosBundle\Entity\Student $firstnameStd = null)
    {
        $this->firstnameStd = $firstnameStd;

        return $this;
    }

    /**
     * Get firstnameStd
     *
     * @return \uos\uosBundle\Entity\Student 
     */
    public function getFirstnameStd()
    {
        return $this->firstnameStd;
    }

    /**
     * Set firsrnameEmp
     *
     * @param \uos\uosBundle\Entity\Employee $firsrnameEmp
     * @return Users
     */
    public function setFirsrnameEmp(\uos\uosBundle\Entity\Employee $firsrnameEmp = null)
    {
        $this->firsrnameEmp = $firsrnameEmp;

        return $this;
    }

    /**
     * Get firsrnameEmp
     *
     * @return \uos\uosBundle\Entity\Employee 
     */
    public function getFirsrnameEmp()
    {
        return $this->firsrnameEmp;
    }
}
