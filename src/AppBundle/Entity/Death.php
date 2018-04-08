<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Death
 *
 * @ORM\Table(name="death", indexes={@ORM\Index(name="EPID", columns={"EPID"}), @ORM\Index(name="GhostID", columns={"GhostID"}), @ORM\Index(name="DeathID", columns={"DeathID"})})
 * @ORM\Entity
 */
class Death
{
    /**
     * @var string
     *
     * @ORM\Column(name="DeathName", type="string", length=80, nullable=false)
     */
    private $deathname;

    /**
     * @var integer
     *
     * @ORM\Column(name="DeathID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $deathid;

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
     * @var \AppBundle\Entity\Ghost
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Ghost")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="GhostID", referencedColumnName="GhostID")
     * })
     */
    private $ghostid;



    /**
     * Set deathname
     *
     * @param string $deathname
     *
     * @return Death
     */
    public function setDeathname($deathname)
    {
        $this->deathname = $deathname;

        return $this;
    }

    /**
     * Get deathname
     *
     * @return string
     */
    public function getDeathname()
    {
        return $this->deathname;
    }

    /**
     * Get deathid
     *
     * @return integer
     */
    public function getDeathid()
    {
        return $this->deathid;
    }

    /**
     * Set epid
     *
     * @param \AppBundle\Entity\Ep $epid
     *
     * @return Death
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
     * Set ghostid
     *
     * @param \AppBundle\Entity\Ghost $ghostid
     *
     * @return Death
     */
    public function setGhostid(\AppBundle\Entity\Ghost $ghostid = null)
    {
        $this->ghostid = $ghostid;

        return $this;
    }

    /**
     * Get ghostid
     *
     * @return \AppBundle\Entity\Ghost
     */
    public function getGhostid()
    {
        return $this->ghostid;
    }
}
