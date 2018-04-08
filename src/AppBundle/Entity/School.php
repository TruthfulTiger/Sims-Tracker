<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * School
 *
 * @ORM\Table(name="school")
 * @ORM\Entity
 */
class School
{
    /**
     * @var string
     *
     * @ORM\Column(name="SchoolIcon", type="string", length=80, nullable=true)
     */
    private $schoolicon = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="SchoolName", type="string", length=50, nullable=false)
     */
    private $schoolname;

    /**
     * @var integer
     *
     * @ORM\Column(name="SchoolID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $schoolid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Agegroup", inversedBy="schoolid")
     * @ORM\JoinTable(name="schoolage",
     *   joinColumns={
     *     @ORM\JoinColumn(name="SchoolID", referencedColumnName="SchoolID")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="AgeID", referencedColumnName="AgeID")
     *   }
     * )
     */
    private $ageid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Weekday", mappedBy="schoolid")
     */
    private $dayid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ageid = new \Doctrine\Common\Collections\ArrayCollection();
        $this->dayid = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set schoolicon
     *
     * @param string $schoolicon
     *
     * @return School
     */
    public function setSchoolicon($schoolicon)
    {
        $this->schoolicon = $schoolicon;

        return $this;
    }

    /**
     * Get schoolicon
     *
     * @return string
     */
    public function getSchoolicon()
    {
        return $this->schoolicon;
    }

    /**
     * Set schoolname
     *
     * @param string $schoolname
     *
     * @return School
     */
    public function setSchoolname($schoolname)
    {
        $this->schoolname = $schoolname;

        return $this;
    }

    /**
     * Get schoolname
     *
     * @return string
     */
    public function getSchoolname()
    {
        return $this->schoolname;
    }

    /**
     * Get schoolid
     *
     * @return integer
     */
    public function getSchoolid()
    {
        return $this->schoolid;
    }

    /**
     * Add ageid
     *
     * @param \AppBundle\Entity\Agegroup $ageid
     *
     * @return School
     */
    public function addAgeid(\AppBundle\Entity\Agegroup $ageid)
    {
        $this->ageid[] = $ageid;

        return $this;
    }

    /**
     * Remove ageid
     *
     * @param \AppBundle\Entity\Agegroup $ageid
     */
    public function removeAgeid(\AppBundle\Entity\Agegroup $ageid)
    {
        $this->ageid->removeElement($ageid);
    }

    /**
     * Get ageid
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAgeid()
    {
        return $this->ageid;
    }

    /**
     * Add dayid
     *
     * @param \AppBundle\Entity\Weekday $dayid
     *
     * @return School
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
