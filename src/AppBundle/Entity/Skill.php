<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Skill
 *
 * @ORM\Table(name="skill", indexes={@ORM\Index(name="SkillID", columns={"SkillID"})})
 * @ORM\Entity
 */
class Skill
{
    /**
     * @var string
     *
     * @ORM\Column(name="SkillIcon", type="string", length=80, nullable=true)
     */
    private $skillicon = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="SkillName", type="string", length=50, nullable=false)
     */
    private $skillname;

    /**
     * @var integer
     *
     * @ORM\Column(name="SkillID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $skillid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Uniclass", mappedBy="skillid")
     */
    private $classid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Job", mappedBy="skillid")
     */
    private $jobid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->classid = new \Doctrine\Common\Collections\ArrayCollection();
        $this->jobid = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set skillicon
     *
     * @param string $skillicon
     *
     * @return Skill
     */
    public function setSkillicon($skillicon)
    {
        $this->skillicon = $skillicon;

        return $this;
    }

    /**
     * Get skillicon
     *
     * @return string
     */
    public function getSkillicon()
    {
        return $this->skillicon;
    }

    /**
     * Set skillname
     *
     * @param string $skillname
     *
     * @return Skill
     */
    public function setSkillname($skillname)
    {
        $this->skillname = $skillname;

        return $this;
    }

    /**
     * Get skillname
     *
     * @return string
     */
    public function getSkillname()
    {
        return $this->skillname;
    }

    /**
     * Get skillid
     *
     * @return integer
     */
    public function getSkillid()
    {
        return $this->skillid;
    }

    /**
     * Add classid
     *
     * @param \AppBundle\Entity\Uniclass $classid
     *
     * @return Skill
     */
    public function addClassid(\AppBundle\Entity\Uniclass $classid)
    {
        $this->classid[] = $classid;

        return $this;
    }

    /**
     * Remove classid
     *
     * @param \AppBundle\Entity\Uniclass $classid
     */
    public function removeClassid(\AppBundle\Entity\Uniclass $classid)
    {
        $this->classid->removeElement($classid);
    }

    /**
     * Get classid
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getClassid()
    {
        return $this->classid;
    }

    /**
     * Add jobid
     *
     * @param \AppBundle\Entity\Job $jobid
     *
     * @return Skill
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
