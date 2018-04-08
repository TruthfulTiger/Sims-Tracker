<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Weekday
 *
 * @ORM\Table(name="weekday", indexes={@ORM\Index(name="DayID", columns={"DayID"})})
 * @ORM\Entity
 */
class Weekday
{
    /**
     * @var string
     *
     * @ORM\Column(name="DayName", type="string", length=50, nullable=true)
     */
    private $dayname = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="DayShort", type="string", length=1, nullable=true)
     */
    private $dayshort = 'NULL';

    /**
     * @var integer
     *
     * @ORM\Column(name="DayID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $dayid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Petjob", inversedBy="dayid")
     * @ORM\JoinTable(name="petworkdays",
     *   joinColumns={
     *     @ORM\JoinColumn(name="DayID", referencedColumnName="DayID")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="PetJobID", referencedColumnName="PetJobID")
     *   }
     * )
     */
    private $petjobid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\School", inversedBy="dayid")
     * @ORM\JoinTable(name="schooldays",
     *   joinColumns={
     *     @ORM\JoinColumn(name="DayID", referencedColumnName="DayID")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="SchoolID", referencedColumnName="SchoolID")
     *   }
     * )
     */
    private $schoolid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Job", inversedBy="dayid")
     * @ORM\JoinTable(name="workdays",
     *   joinColumns={
     *     @ORM\JoinColumn(name="DayID", referencedColumnName="DayID")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="JobID", referencedColumnName="JobID")
     *   }
     * )
     */
    private $jobid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->petjobid = new \Doctrine\Common\Collections\ArrayCollection();
        $this->schoolid = new \Doctrine\Common\Collections\ArrayCollection();
        $this->jobid = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set dayname
     *
     * @param string $dayname
     *
     * @return Weekday
     */
    public function setDayname($dayname)
    {
        $this->dayname = $dayname;

        return $this;
    }

    /**
     * Get dayname
     *
     * @return string
     */
    public function getDayname()
    {
        return $this->dayname;
    }

    /**
     * Set dayshort
     *
     * @param string $dayshort
     *
     * @return Weekday
     */
    public function setDayshort($dayshort)
    {
        $this->dayshort = $dayshort;

        return $this;
    }

    /**
     * Get dayshort
     *
     * @return string
     */
    public function getDayshort()
    {
        return $this->dayshort;
    }

    /**
     * Get dayid
     *
     * @return integer
     */
    public function getDayid()
    {
        return $this->dayid;
    }

    /**
     * Add petjobid
     *
     * @param \AppBundle\Entity\Petjob $petjobid
     *
     * @return Weekday
     */
    public function addPetjobid(\AppBundle\Entity\Petjob $petjobid)
    {
        $this->petjobid[] = $petjobid;

        return $this;
    }

    /**
     * Remove petjobid
     *
     * @param \AppBundle\Entity\Petjob $petjobid
     */
    public function removePetjobid(\AppBundle\Entity\Petjob $petjobid)
    {
        $this->petjobid->removeElement($petjobid);
    }

    /**
     * Get petjobid
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPetjobid()
    {
        return $this->petjobid;
    }

    /**
     * Add schoolid
     *
     * @param \AppBundle\Entity\School $schoolid
     *
     * @return Weekday
     */
    public function addSchoolid(\AppBundle\Entity\School $schoolid)
    {
        $this->schoolid[] = $schoolid;

        return $this;
    }

    /**
     * Remove schoolid
     *
     * @param \AppBundle\Entity\School $schoolid
     */
    public function removeSchoolid(\AppBundle\Entity\School $schoolid)
    {
        $this->schoolid->removeElement($schoolid);
    }

    /**
     * Get schoolid
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSchoolid()
    {
        return $this->schoolid;
    }

    /**
     * Add jobid
     *
     * @param \AppBundle\Entity\Job $jobid
     *
     * @return Weekday
     */
    public function addJobid(\AppBundle\Entity\Job $jobid)
    {
        $this->jobid[] = $jobid;

        return $this;
    }

    /**
     * Remove jobid
     *
     * @param \AppBundle\Entity\Job $jobid
     */
    public function removeJobid(\AppBundle\Entity\Job $jobid)
    {
        $this->jobid->removeElement($jobid);
    }

    /**
     * Get jobid
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getJobid()
    {
        return $this->jobid;
    }
}
