<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ep
 *
 * @ORM\Table(name="ep")
 * @ORM\Entity
 */
class Ep
{
    /**
     * @var string
     *
     * @ORM\Column(name="EPIcon", type="string", length=80, nullable=true)
     */
    private $epicon = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="EPName", type="string", length=50, nullable=false)
     */
    private $epname;

    /**
     * @var boolean
     *
     * @ORM\Column(name="IsSP", type="boolean", nullable=false)
     */
    private $issp;

    /**
     * @var integer
     *
     * @ORM\Column(name="EPID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $epid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Game", mappedBy="epid")
     */
    private $gameid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->gameid = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set epicon
     *
     * @param string $epicon
     *
     * @return Ep
     */
    public function setEpicon($epicon)
    {
        $this->epicon = $epicon;

        return $this;
    }

    /**
     * Get epicon
     *
     * @return string
     */
    public function getEpicon()
    {
        return $this->epicon;
    }

    /**
     * Set epname
     *
     * @param string $epname
     *
     * @return Ep
     */
    public function setEpname($epname)
    {
        $this->epname = $epname;

        return $this;
    }

    /**
     * Get epname
     *
     * @return string
     */
    public function getEpname()
    {
        return $this->epname;
    }

    /**
     * Set issp
     *
     * @param boolean $issp
     *
     * @return Ep
     */
    public function setIssp($issp)
    {
        $this->issp = $issp;

        return $this;
    }

    /**
     * Get issp
     *
     * @return boolean
     */
    public function getIssp()
    {
        return $this->issp;
    }

    /**
     * Get epid
     *
     * @return integer
     */
    public function getEpid()
    {
        return $this->epid;
    }

    /**
     * Add gameid
     *
     * @param \AppBundle\Entity\Game $gameid
     *
     * @return Ep
     */
    public function addGameid(\AppBundle\Entity\Game $gameid)
    {
        $this->gameid[] = $gameid;

        return $this;
    }

    /**
     * Remove gameid
     *
     * @param \AppBundle\Entity\Game $gameid
     */
    public function removeGameid(\AppBundle\Entity\Game $gameid)
    {
        $this->gameid->removeElement($gameid);
    }

    /**
     * Get gameid
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGameid()
    {
        return $this->gameid;
    }
}
