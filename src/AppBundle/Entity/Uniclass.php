<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Uniclass
 *
 * @ORM\Table(name="uniclass", indexes={@ORM\Index(name="MajorID", columns={"MajorID"}), @ORM\Index(name="YearID", columns={"YearID"}), @ORM\Index(name="ClassID", columns={"ClassID"})})
 * @ORM\Entity
 */
class Uniclass
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Semester", type="integer", nullable=false)
     */
    private $semester;

    /**
     * @var string
     *
     * @ORM\Column(name="ClassName", type="string", length=60, nullable=false)
     */
    private $classname;

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
     * @ORM\Column(name="ClassID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $classid;

    /**
     * @var \AppBundle\Entity\Major
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Major")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="MajorID", referencedColumnName="MajorID")
     * })
     */
    private $majorid;

    /**
     * @var \AppBundle\Entity\Year
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Year")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="YearID", referencedColumnName="YearID")
     * })
     */
    private $yearid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Skill", inversedBy="classid")
     * @ORM\JoinTable(name="classskills",
     *   joinColumns={
     *     @ORM\JoinColumn(name="ClassID", referencedColumnName="ClassID")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="SkillID", referencedColumnName="SkillID")
     *   }
     * )
     */
    private $skillid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->skillid = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set semester
     *
     * @param integer $semester
     *
     * @return Uniclass
     */
    public function setSemester($semester)
    {
        $this->semester = $semester;

        return $this;
    }

    /**
     * Get semester
     *
     * @return integer
     */
    public function getSemester()
    {
        return $this->semester;
    }

    /**
     * Set classname
     *
     * @param string $classname
     *
     * @return Uniclass
     */
    public function setClassname($classname)
    {
        $this->classname = $classname;

        return $this;
    }

    /**
     * Get classname
     *
     * @return string
     */
    public function getClassname()
    {
        return $this->classname;
    }

    /**
     * Set starttime
     *
     * @param \DateTime $starttime
     *
     * @return Uniclass
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
     * @return Uniclass
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
     * Get classid
     *
     * @return integer
     */
    public function getClassid()
    {
        return $this->classid;
    }

    /**
     * Set majorid
     *
     * @param \AppBundle\Entity\Major $majorid
     *
     * @return Uniclass
     */
    public function setMajorid(\AppBundle\Entity\Major $majorid = null)
    {
        $this->majorid = $majorid;

        return $this;
    }

    /**
     * Get majorid
     *
     * @return \AppBundle\Entity\Major
     */
    public function getMajorid()
    {
        return $this->majorid;
    }

    /**
     * Set yearid
     *
     * @param \AppBundle\Entity\Year $yearid
     *
     * @return Uniclass
     */
    public function setYearid(\AppBundle\Entity\Year $yearid = null)
    {
        $this->yearid = $yearid;

        return $this;
    }

    /**
     * Get yearid
     *
     * @return \AppBundle\Entity\Year
     */
    public function getYearid()
    {
        return $this->yearid;
    }

    /**
     * Add skillid
     *
     * @param \AppBundle\Entity\Skill $skillid
     *
     * @return Uniclass
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
}
