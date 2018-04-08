<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Greekhouselevel
 *
 * @ORM\Table(name="greekhouselevel", indexes={@ORM\Index(name="GHLevelID", columns={"GHLevelID"})})
 * @ORM\Entity
 */
class Greekhouselevel
{
    /**
     * @var integer
     *
     * @ORM\Column(name="RankNo", type="integer", nullable=false)
     */
    private $rankno;

    /**
     * @var integer
     *
     * @ORM\Column(name="NoFriends", type="integer", nullable=true)
     */
    private $nofriends = 'NULL';

    /**
     * @var integer
     *
     * @ORM\Column(name="MaxMembers", type="integer", nullable=true)
     */
    private $maxmembers = 'NULL';

    /**
     * @var integer
     *
     * @ORM\Column(name="GHLevelID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ghlevelid;



    /**
     * Set rankno
     *
     * @param integer $rankno
     *
     * @return Greekhouselevel
     */
    public function setRankno($rankno)
    {
        $this->rankno = $rankno;

        return $this;
    }

    /**
     * Get rankno
     *
     * @return integer
     */
    public function getRankno()
    {
        return $this->rankno;
    }

    /**
     * Set nofriends
     *
     * @param integer $nofriends
     *
     * @return Greekhouselevel
     */
    public function setNofriends($nofriends)
    {
        $this->nofriends = $nofriends;

        return $this;
    }

    /**
     * Get nofriends
     *
     * @return integer
     */
    public function getNofriends()
    {
        return $this->nofriends;
    }

    /**
     * Set maxmembers
     *
     * @param integer $maxmembers
     *
     * @return Greekhouselevel
     */
    public function setMaxmembers($maxmembers)
    {
        $this->maxmembers = $maxmembers;

        return $this;
    }

    /**
     * Get maxmembers
     *
     * @return integer
     */
    public function getMaxmembers()
    {
        return $this->maxmembers;
    }

    /**
     * Get ghlevelid
     *
     * @return integer
     */
    public function getGhlevelid()
    {
        return $this->ghlevelid;
    }
}
