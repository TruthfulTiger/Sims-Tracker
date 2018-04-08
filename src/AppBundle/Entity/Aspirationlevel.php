<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aspirationlevel
 *
 * @ORM\Table(name="aspirationlevel", indexes={@ORM\Index(name="GenderID", columns={"GenderID"}), @ORM\Index(name="AgeID", columns={"AgeID"}), @ORM\Index(name="AspirationID", columns={"AspirationID"}), @ORM\Index(name="AspLevelID", columns={"AspLevelID"})})
 * @ORM\Entity
 */
class Aspirationlevel
{
    /**
     * @var string
     *
     * @ORM\Column(name="AspLevelValue", type="string", length=50, nullable=false)
     */
    private $asplevelvalue;

    /**
     * @var string
     *
     * @ORM\Column(name="AspLevelName", type="string", length=50, nullable=false)
     */
    private $asplevelname;

    /**
     * @var integer
     *
     * @ORM\Column(name="AspLevelID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $asplevelid;

    /**
     * @var \AppBundle\Entity\Gender
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Gender")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="GenderID", referencedColumnName="GenderID")
     * })
     */
    private $genderid;

    /**
     * @var \AppBundle\Entity\Agegroup
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Agegroup")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="AgeID", referencedColumnName="AgeID")
     * })
     */
    private $ageid;

    /**
     * @var \AppBundle\Entity\Aspiration
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Aspiration")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="AspirationID", referencedColumnName="AspirationID")
     * })
     */
    private $aspirationid;



    /**
     * Set asplevelvalue
     *
     * @param string $asplevelvalue
     *
     * @return Aspirationlevel
     */
    public function setAsplevelvalue($asplevelvalue)
    {
        $this->asplevelvalue = $asplevelvalue;

        return $this;
    }

    /**
     * Get asplevelvalue
     *
     * @return string
     */
    public function getAsplevelvalue()
    {
        return $this->asplevelvalue;
    }

    /**
     * Set asplevelname
     *
     * @param string $asplevelname
     *
     * @return Aspirationlevel
     */
    public function setAsplevelname($asplevelname)
    {
        $this->asplevelname = $asplevelname;

        return $this;
    }

    /**
     * Get asplevelname
     *
     * @return string
     */
    public function getAsplevelname()
    {
        return $this->asplevelname;
    }

    /**
     * Get asplevelid
     *
     * @return integer
     */
    public function getAsplevelid()
    {
        return $this->asplevelid;
    }

    /**
     * Set genderid
     *
     * @param \AppBundle\Entity\Gender $genderid
     *
     * @return Aspirationlevel
     */
    public function setGenderid(\AppBundle\Entity\Gender $genderid = null)
    {
        $this->genderid = $genderid;

        return $this;
    }

    /**
     * Get genderid
     *
     * @return \AppBundle\Entity\Gender
     */
    public function getGenderid()
    {
        return $this->genderid;
    }

    /**
     * Set ageid
     *
     * @param \AppBundle\Entity\Agegroup $ageid
     *
     * @return Aspirationlevel
     */
    public function setAgeid(\AppBundle\Entity\Agegroup $ageid = null)
    {
        $this->ageid = $ageid;

        return $this;
    }

    /**
     * Get ageid
     *
     * @return \AppBundle\Entity\Agegroup
     */
    public function getAgeid()
    {
        return $this->ageid;
    }

    /**
     * Set aspirationid
     *
     * @param \AppBundle\Entity\Aspiration $aspirationid
     *
     * @return Aspirationlevel
     */
    public function setAspirationid(\AppBundle\Entity\Aspiration $aspirationid = null)
    {
        $this->aspirationid = $aspirationid;

        return $this;
    }

    /**
     * Get aspirationid
     *
     * @return \AppBundle\Entity\Aspiration
     */
    public function getAspirationid()
    {
        return $this->aspirationid;
    }
}
