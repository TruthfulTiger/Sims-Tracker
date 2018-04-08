<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Influence
 *
 * @ORM\Table(name="influence")
 * @ORM\Entity
 */
class Influence
{
    /**
     * @var string
     *
     * @ORM\Column(name="InfLevelName", type="string", length=60, nullable=false)
     */
    private $inflevelname;

    /**
     * @var integer
     *
     * @ORM\Column(name="MaxPoints", type="integer", nullable=false)
     */
    private $maxpoints;

    /**
     * @var integer
     *
     * @ORM\Column(name="FriendsNeeded", type="integer", nullable=false)
     */
    private $friendsneeded;

    /**
     * @var integer
     *
     * @ORM\Column(name="InfluenceID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $influenceid;



    /**
     * Set inflevelname
     *
     * @param string $inflevelname
     *
     * @return Influence
     */
    public function setInflevelname($inflevelname)
    {
        $this->inflevelname = $inflevelname;

        return $this;
    }

    /**
     * Get inflevelname
     *
     * @return string
     */
    public function getInflevelname()
    {
        return $this->inflevelname;
    }

    /**
     * Set maxpoints
     *
     * @param integer $maxpoints
     *
     * @return Influence
     */
    public function setMaxpoints($maxpoints)
    {
        $this->maxpoints = $maxpoints;

        return $this;
    }

    /**
     * Get maxpoints
     *
     * @return integer
     */
    public function getMaxpoints()
    {
        return $this->maxpoints;
    }

    /**
     * Set friendsneeded
     *
     * @param integer $friendsneeded
     *
     * @return Influence
     */
    public function setFriendsneeded($friendsneeded)
    {
        $this->friendsneeded = $friendsneeded;

        return $this;
    }

    /**
     * Get friendsneeded
     *
     * @return integer
     */
    public function getFriendsneeded()
    {
        return $this->friendsneeded;
    }

    /**
     * Get influenceid
     *
     * @return integer
     */
    public function getInfluenceid()
    {
        return $this->influenceid;
    }
}
