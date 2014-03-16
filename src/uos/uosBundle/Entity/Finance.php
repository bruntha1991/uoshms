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
     * @var \DateTime
     */
    private $paydate;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \uos\uosBundle\Entity\Occupy
     */
    private $occupy;


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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
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
}
