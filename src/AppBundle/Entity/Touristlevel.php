<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Touristlevel
 *
 * @ORM\Table(name="touristlevel", indexes={@ORM\Index(name="TLevelID", columns={"TLevelID"})})
 * @ORM\Entity
 */
class Touristlevel
{
    /**
     * @var string
     *
     * @ORM\Column(name="LevelName", type="string", length=50, nullable=false)
     */
    private $levelname;

    /**
     * @var integer
     *
     * @ORM\Column(name="LevelScore", type="integer", nullable=false)
     */
    private $levelscore;

    /**
     * @var integer
     *
     * @ORM\Column(name="TLevelID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tlevelid;



    /**
     * Set levelname
     *
     * @param string $levelname
     *
     * @return Touristlevel
     */
    public function setLevelname($levelname)
    {
        $this->levelname = $levelname;

        return $this;
    }

    /**
     * Get levelname
     *
     * @return string
     */
    public function getLevelname()
    {
        return $this->levelname;
    }

    /**
     * Set levelscore
     *
     * @param integer $levelscore
     *
     * @return Touristlevel
     */
    public function setLevelscore($levelscore)
    {
        $this->levelscore = $levelscore;

        return $this;
    }

    /**
     * Get levelscore
     *
     * @return integer
     */
    public function getLevelscore()
    {
        return $this->levelscore;
    }

    /**
     * Get tlevelid
     *
     * @return integer
     */
    public function getTlevelid()
    {
        return $this->tlevelid;
    }
}
