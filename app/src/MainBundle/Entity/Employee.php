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
     * @var int
     */
    protected $id;

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
    /**
     * @var boolean
     */
    private $jobID;

    /**
     * @var \DateTime
     */
    private $recruited;


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
     * @var boolean
     */
    private $enabled;


    /**
     * Set enabled
     *
     * @param boolean $enabled
     * @return Employee
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean 
     */
    public function getEnabled()
    {
        return $this->enabled;
    }
}
