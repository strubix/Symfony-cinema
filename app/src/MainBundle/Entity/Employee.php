<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;


/**
 * Employee
 */
class Employee extends BaseUser
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var boolean
     */
    private $jobID;

    /**
     * @var \DateTime
     */
    private $recruited;

    /**
     * @var string
     */
    private $name;


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
     * Set jobID
     *
     * @param boolean $jobID
     * @return Employee
     */
    public function setJobID($jobID)
    {
        $this->jobID = $jobID;

        return $this;
    }

    /**
     * Get jobID
     *
     * @return boolean 
     */
    public function getJobID()
    {
        return $this->jobID;
    }

    /**
     * Set recruited
     *
     * @param \DateTime $recruited
     * @return Employee
     */
    public function setRecruited($recruited)
    {
        $this->recruited = $recruited;

        return $this;
    }

    /**
     * Get recruited
     *
     * @return \DateTime 
     */
    public function getRecruited()
    {
        return $this->recruited;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Employee
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
}
