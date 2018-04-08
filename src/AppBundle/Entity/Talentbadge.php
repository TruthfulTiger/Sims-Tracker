<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Talentbadge
 *
 * @ORM\Table(name="talentbadge", indexes={@ORM\Index(name="EPID", columns={"EPID"}), @ORM\Index(name="BadgeID", columns={"BadgeID"})})
 * @ORM\Entity
 */
class Talentbadge
{
    /**
     * @var string
     *
     * @ORM\Column(name="BadgeName", type="string", length=50, nullable=false)
     */
    private $badgename;

    /**
     * @var integer
     *
     * @ORM\Column(name="BadgeID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $badgeid;

    /**
     * @var \AppBundle\Entity\Ep
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Ep")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="EPID", referencedColumnName="EPID")
     * })
     */
    private $epid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Badgescore", inversedBy="badgeid")
     * @ORM\JoinTable(name="badgelevel",
     *   joinColumns={
     *     @ORM\JoinColumn(name="BadgeID", referencedColumnName="BadgeID")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="BSID", referencedColumnName="BSID")
     *   }
     * )
     */
    private $bsid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->bsid = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set badgename
     *
     * @param string $badgename
     *
     * @return Talentbadge
     */
    public function setBadgename($badgename)
    {
        $this->badgename = $badgename;

        return $this;
    }

    /**
     * Get badgename
     *
     * @return string
     */
    public function getBadgename()
    {
        return $this->badgename;
    }

    /**
     * Get badgeid
     *
     * @return integer
     */
    public function getBadgeid()
    {
        return $this->badgeid;
    }

    /**
     * Set epid
     *
     * @param \AppBundle\Entity\Ep $epid
     *
     * @return Talentbadge
     */
    public function setEpid(\AppBundle\Entity\Ep $epid = null)
    {
        $this->epid = $epid;

        return $this;
    }

    /**
     * Get epid
     *
     * @return \AppBundle\Entity\Ep
     */
    public function getEpid()
    {
        return $this->epid;
    }

    /**
     * Add bsid
     *
     * @param \AppBundle\Entity\Badgescore $bsid
     *
     * @return Talentbadge
     */
    public function addBsid(\AppBundle\Entity\Badgescore $bsid)
    {
        $this->bsid[] = $bsid;

        return $this;
    }

    /**
     * Remove bsid
     *
     * @param \AppBundle\Entity\Badgescore $bsid
     */
    public function removeBsid(\AppBundle\Entity\Badgescore $bsid)
    {
        $this->bsid->removeElement($bsid);
    }

    /**
     * Get bsid
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBsid()
    {
        return $this->bsid;
    }
}
