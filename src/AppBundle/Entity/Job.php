<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Job
 *
 * @ORM\Table(name="job", indexes={@ORM\Index(name="CareerID", columns={"CareerID"})})
 * @ORM\Entity
 */
class Job
{
    /**
     * @var integer
     *
     * @ORM\Column(name="AgeID", type="integer", nullable=false)
     */
    private $ageid;

    /**
     * @var integer
     *
     * @ORM\Column(name="JobLevel", type="integer", nullable=false)
     */
    private $joblevel;

    /**
     * @var string
     *
     * @ORM\Column(name="JobName", type="string", length=60, nullable=false)
     */
    private $jobname;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=100, nullable=true)
     */
    private $description = 'NULL';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="StartTime", type="time", nullable=false)
     */
    private $starttime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FinishTime", type="time", nullable=false)
     */
    private $finishtime;

    /**
     * @var integer
     *
     * @ORM\Column(name="FriendsNeeded", type="integer", nullable=true)
     */
    private $friendsneeded = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Salary", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $salary = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Bonus", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $bonus = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="JobID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $jobid;

    /**
     * @var \AppBundle\Entity\Career
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Career")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CareerID", referencedColumnName="CareerID")
     * })
     */
    private $careerid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Skill", inversedBy="jobid")
     * @ORM\JoinTable(name="jobskills",
     *   joinColumns={
     *     @ORM\JoinColumn(name="JobID", referencedColumnName="JobID")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="SkillID", referencedColumnName="SkillID")
     *   }
     * )
     */
    private $skillid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Weekday", mappedBy="jobid")
     */
    private $dayid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->skillid = new \Doctrine\Common\Collections\ArrayCollection();
        $this->dayid = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set ageid
     *
     * @param integer $ageid
     *
     * @return Job
     */
    public function setAgeid($ageid)
    {
        $this->ageid = $ageid;

        return $this;
    }

    /**
     * Get ageid
     *
     * @return integer
     */
    public function getAgeid()
    {
        return $this->ageid;
    }

    /**
     * Set joblevel
     *
     * @param integer $joblevel
     *
     * @return Job
     */
    public function setJoblevel($joblevel)
    {
        $this->joblevel = $joblevel;

        return $this;
    }

    /**
     * Get joblevel
     *
     * @return integer
     */
    public function getJoblevel()
    {
        return $this->joblevel;
    }

    /**
     * Set jobname
     *
     * @param string $jobname
     *
     * @return Job
     */
    public function setJobname($jobname)
    {
        $this->jobname = $jobname;

        return $this;
    }

    /**
     * Get jobname
     *
     * @return string
     */
    public function getJobname()
    {
        return $this->jobname;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Job
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set starttime
     *
     * @param \DateTime $starttime
     *
     * @return Job
     */
    public function setStarttime($starttime)
    {
        $this->starttime = $starttime;

        return $this;
    }

    /**
     * Get starttime
     *
     * @return \DateTime
     */
    public function getStarttime()
    {
        return $this->starttime;
    }

    /**
     * Set finishtime
     *
     * @param \DateTime $finishtime
     *
     * @return Job
     */
    public function setFinishtime($finishtime)
    {
        $this->finishtime = $finishtime;

        return $this;
    }

    /**
     * Get finishtime
     *
     * @return \DateTime
     */
    public function getFinishtime()
    {
        return $this->finishtime;
    }

    /**
     * Set friendsneeded
     *
     * @param integer $friendsneeded
     *
     * @return Job
     */
    public function setFriendsneeded($friendsneeded)
    {
        $this->friendsneeded = $friendsneeded;

        return $this;
    }

    /**
     * Get friendsneeded
     *
     * @return integer
     */
    public function getFriendsneeded()
    {
        return $this->friendsneeded;
    }

    /**
     * Set salary
     *
     * @param string $salary
     *
     * @return Job
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;

        return $this;
    }

    /**
     * Get salary
     *
     * @return string
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * Set bonus
     *
     * @param string $bonus
     *
     * @return Job
     */
    public function setBonus($bonus)
    {
        $this->bonus = $bonus;

        return $this;
    }

    /**
     * Get bonus
     *
     * @return string
     */
    public function getBonus()
    {
        return $this->bonus;
    }

    /**
     * Get jobid
     *
     * @return integer
     */
    public function getJobid()
    {
        return $this->jobid;
    }

    /**
     * Set careerid
     *
     * @param \AppBundle\Entity\Career $careerid
     *
     * @return Job
     */
    public function setCareerid(\AppBundle\Entity\Career $careerid = null)
    {
        $this->careerid = $careerid;

        return $this;
    }

    /**
     * Get careerid
     *
     * @return \AppBundle\Entity\Career
     */
    public function getCareerid()
    {
        return $this->careerid;
    }

    /**
     * Add skillid
     *
     * @param \AppBundle\Entity\Skill $skillid
     *
     * @return Job
     */
    public function addSkillid(\AppBundle\Entity\Skill $skillid)
    {
        $this->skillid[] = $skillid;

        return $this;
    }

    /**
     * Remove skillid
     *
     * @param \AppBundle\Entity\Skill $skillid
     */
    public function removeSkillid(\AppBundle\Entity\Skill $skillid)
    {
        $this->skillid->removeElement($skillid);
    }

    /**
     * Get skillid
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSkillid()
    {
        return $this->skillid;
    }

    /**
     * Add dayid
     *
     * @param \AppBundle\Entity\Weekday $dayid
     *
     * @return Job
     */
    public function addDayid(\AppBundle\Entity\Weekday $dayid)
    {
        $this->dayid[] = $dayid;

        return $this;
    }

    /**
     * Remove dayid
     *
     * @param \AppBundle\Entity\Weekday $dayid
     */
    public function removeDayid(\AppBundle\Entity\Weekday $dayid)
    {
        $this->dayid->removeElement($dayid);
    }

    /**
     * Get dayid
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDayid()
    {
        return $this->dayid;
    }
}
