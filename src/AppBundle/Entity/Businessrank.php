<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Businessrank
 *
 * @ORM\Table(name="businessrank", indexes={@ORM\Index(name="RankID", columns={"RankID"})})
 * @ORM\Entity
 */
class Businessrank
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Rank", type="integer", nullable=false)
     */
    private $rank;

    /**
     * @var integer
     *
     * @ORM\Column(name="RankID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $rankid;



    /**
     * Set rank
     *
     * @param integer $rank
     *
     * @return Businessrank
     */
    public function setRank($rank)
    {
        $this->rank = $rank;

        return $this;
    }

    /**
     * Get rank
     *
     * @return integer
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Get rankid
     *
     * @return integer
     */
    public function getRankid()
    {
        return $this->rankid;
    }
}
