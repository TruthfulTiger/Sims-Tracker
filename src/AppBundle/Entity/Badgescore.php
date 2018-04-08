<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Badgescore
 *
 * @ORM\Table(name="badgescore", indexes={@ORM\Index(name="BSID", columns={"BSID"})})
 * @ORM\Entity
 */
class Badgescore
{
    /**
     * @var string
     *
     * @ORM\Column(name="BadgeScoreName", type="string", length=50, nullable=true)
     */
    private $badgescorename = 'NULL';

    /**
     * @var integer
     *
     * @ORM\Column(name="BSID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $bsid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Talentbadge", mappedBy="bsid")
     */
    private $badgeid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->badgeid = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set badgescorename
     *
     * @param string $badgescorename
     *
     * @return Badgescore
     */
    public function setBadgescorename($badgescorename)
    {
        $this->badgescorename = $badgescorename;

        return $this;
    }

    /**
     * Get badgescorename
     *
     * @return string
     */
    public function getBadgescorename()
    {
        return $this->badgescorename;
    }

    /**
     * Get bsid
     *
     * @return integer
     */
    public function getBsid()
    {
        return $this->bsid;
    }

    /**
     * Add badgeid
     *
     * @param \AppBundle\Entity\Talentbadge $badgeid
     *
     * @return Badgescore
     */
    public function addBadgeid(\AppBundle\Entity\Talentbadge $badgeid)
    {
        $this->badgeid[] = $badgeid;

        return $this;
    }

    /**
     * Remove badgeid
     *
     * @param \AppBundle\Entity\Talentbadge $badgeid
     */
    public function removeBadgeid(\AppBundle\Entity\Talentbadge $badgeid)
    {
        $this->badgeid->removeElement($badgeid);
    }

    /**
     * Get badgeid
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBadgeid()
    {
        return $this->badgeid;
    }
}
