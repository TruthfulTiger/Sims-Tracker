<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Scholarship
 *
 * @ORM\Table(name="scholarship", indexes={@ORM\Index(name="SkillID", columns={"SkillID"}), @ORM\Index(name="ScholarshipID", columns={"ScholarshipID"})})
 * @ORM\Entity
 */
class Scholarship
{
    /**
     * @var string
     *
     * @ORM\Column(name="ScholName", type="string", length=60, nullable=false)
     */
    private $scholname;

    /**
     * @var string
     *
     * @ORM\Column(name="Requirements", type="string", length=60, nullable=false)
     */
    private $requirements;

    /**
     * @var integer
     *
     * @ORM\Column(name="AwardAmount", type="integer", nullable=true)
     */
    private $awardamount = 'NULL';

    /**
     * @var integer
     *
     * @ORM\Column(name="ScholarshipID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $scholarshipid;

    /**
     * @var \AppBundle\Entity\Skill
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Skill")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="SkillID", referencedColumnName="SkillID")
     * })
     */
    private $skillid;



    /**
     * Set scholname
     *
     * @param string $scholname
     *
     * @return Scholarship
     */
    public function setScholname($scholname)
    {
        $this->scholname = $scholname;

        return $this;
    }

    /**
     * Get scholname
     *
     * @return string
     */
    public function getScholname()
    {
        return $this->scholname;
    }

    /**
     * Set requirements
     *
     * @param string $requirements
     *
     * @return Scholarship
     */
    public function setRequirements($requirements)
    {
        $this->requirements = $requirements;

        return $this;
    }

    /**
     * Get requirements
     *
     * @return string
     */
    public function getRequirements()
    {
        return $this->requirements;
    }

    /**
     * Set awardamount
     *
     * @param integer $awardamount
     *
     * @return Scholarship
     */
    public function setAwardamount($awardamount)
    {
        $this->awardamount = $awardamount;

        return $this;
    }

    /**
     * Get awardamount
     *
     * @return integer
     */
    public function getAwardamount()
    {
        return $this->awardamount;
    }

    /**
     * Get scholarshipid
     *
     * @return integer
     */
    public function getScholarshipid()
    {
        return $this->scholarshipid;
    }

    /**
     * Set skillid
     *
     * @param \AppBundle\Entity\Skill $skillid
     *
     * @return Scholarship
     */
    public function setSkillid(\AppBundle\Entity\Skill $skillid = null)
    {
        $this->skillid = $skillid;

        return $this;
    }

    /**
     * Get skillid
     *
     * @return \AppBundle\Entity\Skill
     */
    public function getSkillid()
    {
        return $this->skillid;
    }
}
