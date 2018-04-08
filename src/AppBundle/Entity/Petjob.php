<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Petjob
 *
 * @ORM\Table(name="petjob", indexes={@ORM\Index(name="CareerID", columns={"CareerID"}), @ORM\Index(name="CommandNeeded", columns={"CommandNeeded"})})
 * @ORM\Entity
 */
class Petjob
{
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
     * @var integer
     *
     * @ORM\Column(name="JobLevel", type="integer", nullable=false)
     */
    private $joblevel;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="StartTime", type="time", nullable=true)
     */
    private $starttime = 'NULL';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FinishTime", type="time", nullable=true)
     */
    private $finishtime = 'NULL';

    /**
     * @var integer
     *
     * @ORM\Column(name="PetJobID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $petjobid;

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
     * @var \AppBundle\Entity\Command
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Command")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CommandNeeded", referencedColumnName="CommandID")
     * })
     */
    private $commandneeded;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Weekday", mappedBy="petjobid")
     */
    private $dayid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Species", mappedBy="petjobid")
     */
    private $speciesid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->dayid = new \Doctrine\Common\Collections\ArrayCollection();
        $this->speciesid = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set jobname
     *
     * @param string $jobname
     *
     * @return Petjob
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
     * @return Petjob
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
     * Set joblevel
     *
     * @param integer $joblevel
     *
     * @return Petjob
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
     * Set starttime
     *
     * @param \DateTime $starttime
     *
     * @return Petjob
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
     * @return Petjob
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
     * Get petjobid
     *
     * @return integer
     */
    public function getPetjobid()
    {
        return $this->petjobid;
    }

    /**
     * Set careerid
     *
     * @param \AppBundle\Entity\Career $careerid
     *
     * @return Petjob
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
     * Set commandneeded
     *
     * @param \AppBundle\Entity\Command $commandneeded
     *
     * @return Petjob
     */
    public function setCommandneeded(\AppBundle\Entity\Command $commandneeded = null)
    {
        $this->commandneeded = $commandneeded;

        return $this;
    }

    /**
     * Get commandneeded
     *
     * @return \AppBundle\Entity\Command
     */
    public function getCommandneeded()
    {
        return $this->commandneeded;
    }

    /**
     * Add dayid
     *
     * @param \AppBundle\Entity\Weekday $dayid
     *
     * @return Petjob
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

    /**
     * Add speciesid
     *
     * @param \AppBundle\Entity\Species $speciesid
     *
     * @return Petjob
     */
    public function addSpeciesid(\AppBundle\Entity\Species $speciesid)
    {
        $this->speciesid[] = $speciesid;

        return $this;
    }

    /**
     * Remove speciesid
     *
     * @param \AppBundle\Entity\Species $speciesid
     */
    public function removeSpeciesid(\AppBundle\Entity\Species $speciesid)
    {
        $this->speciesid->removeElement($speciesid);
    }

    /**
     * Get speciesid
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSpeciesid()
    {
        return $this->speciesid;
    }
}
