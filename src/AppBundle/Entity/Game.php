<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Game
 *
 * @ORM\Table(name="game")
 * @ORM\Entity
 */
class Game
{
    /**
     * @var string
     *
     * @ORM\Column(name="GameIcon", type="string", length=80, nullable=true)
     */
    private $gameicon = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="GameName", type="string", length=50, nullable=false)
     */
    private $gamename;

    /**
     * @var integer
     *
     * @ORM\Column(name="GameID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $gameid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Ep", inversedBy="gameid")
     * @ORM\JoinTable(name="gameep",
     *   joinColumns={
     *     @ORM\JoinColumn(name="GameID", referencedColumnName="GameID")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="EPID", referencedColumnName="EPID")
     *   }
     * )
     */
    private $epid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->epid = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set gameicon
     *
     * @param string $gameicon
     *
     * @return Game
     */
    public function setGameicon($gameicon)
    {
        $this->gameicon = $gameicon;

        return $this;
    }

    /**
     * Get gameicon
     *
     * @return string
     */
    public function getGameicon()
    {
        return $this->gameicon;
    }

    /**
     * Set gamename
     *
     * @param string $gamename
     *
     * @return Game
     */
    public function setGamename($gamename)
    {
        $this->gamename = $gamename;

        return $this;
    }

    /**
     * Get gamename
     *
     * @return string
     */
    public function getGamename()
    {
        return $this->gamename;
    }

    /**
     * Get gameid
     *
     * @return integer
     */
    public function getGameid()
    {
        return $this->gameid;
    }

    /**
     * Add epid
     *
     * @param \AppBundle\Entity\Ep $epid
     *
     * @return Game
     */
    public function addEpid(\AppBundle\Entity\Ep $epid)
    {
        $this->epid[] = $epid;

        return $this;
    }

    /**
     * Remove epid
     *
     * @param \AppBundle\Entity\Ep $epid
     */
    public function removeEpid(\AppBundle\Entity\Ep $epid)
    {
        $this->epid->removeElement($epid);
    }

    /**
     * Get epid
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEpid()
    {
        return $this->epid;
    }
}
