<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agegroup
 *
 * @ORM\Table(name="agegroup", indexes={@ORM\Index(name="AgeID", columns={"AgeID"})})
 * @ORM\Entity
 */
class Agegroup
{
    /**
     * @var string
     *
     * @ORM\Column(name="AgeIcon", type="string", length=80, nullable=true)
     */
    private $ageicon = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="AgeName", type="string", length=50, nullable=false)
     */
    private $agename;

    /**
     * @var integer
     *
     * @ORM\Column(name="Lifespan", type="integer", nullable=false)
     */
    private $lifespan;

    /**
     * @var integer
     *
     * @ORM\Column(name="AgeID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ageid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\School", mappedBy="ageid")
     */
    private $schoolid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schoolid = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set ageicon
     *
     * @param string $ageicon
     *
     * @return Agegroup
     */
    public function setAgeicon($ageicon)
    {
        $this->ageicon = $ageicon;

        return $this;
    }

    /**
     * Get ageicon
     *
     * @return string
     */
    public function getAgeicon()
    {
        return $this->ageicon;
    }

    /**
     * Set agename
     *
     * @param string $agename
     *
     * @return Agegroup
     */
    public function setAgename($agename)
    {
        $this->agename = $agename;

        return $this;
    }

    /**
     * Get agename
     *
     * @return string
     */
    public function getAgename()
    {
        return $this->agename;
    }

    /**
     * Set lifespan
     *
     * @param integer $lifespan
     *
     * @return Agegroup
     */
    public function setLifespan($lifespan)
    {
        $this->lifespan = $lifespan;

        return $this;
    }

    /**
     * Get lifespan
     *
     * @return integer
     */
    public function getLifespan()
    {
        return $this->lifespan;
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
     * Add schoolid
     *
     * @param \AppBundle\Entity\School $schoolid
     *
     * @return Agegroup
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
}
