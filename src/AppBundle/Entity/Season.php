<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Season
 *
 * @ORM\Table(name="season", indexes={@ORM\Index(name="SeasonID", columns={"SeasonID"})})
 * @ORM\Entity
 */
class Season
{
    /**
     * @var string
     *
     * @ORM\Column(name="SeasonIcon", type="string", length=80, nullable=true)
     */
    private $seasonicon = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="SeasonName", type="string", length=60, nullable=false)
     */
    private $seasonname;

    /**
     * @var integer
     *
     * @ORM\Column(name="TotalDays", type="integer", nullable=true)
     */
    private $totaldays = 'NULL';

    /**
     * @var integer
     *
     * @ORM\Column(name="SeasonID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $seasonid;



    /**
     * Set seasonicon
     *
     * @param string $seasonicon
     *
     * @return Season
     */
    public function setSeasonicon($seasonicon)
    {
        $this->seasonicon = $seasonicon;

        return $this;
    }

    /**
     * Get seasonicon
     *
     * @return string
     */
    public function getSeasonicon()
    {
        return $this->seasonicon;
    }

    /**
     * Set seasonname
     *
     * @param string $seasonname
     *
     * @return Season
     */
    public function setSeasonname($seasonname)
    {
        $this->seasonname = $seasonname;

        return $this;
    }

    /**
     * Get seasonname
     *
     * @return string
     */
    public function getSeasonname()
    {
        return $this->seasonname;
    }

    /**
     * Set totaldays
     *
     * @param integer $totaldays
     *
     * @return Season
     */
    public function setTotaldays($totaldays)
    {
        $this->totaldays = $totaldays;

        return $this;
    }

    /**
     * Get totaldays
     *
     * @return integer
     */
    public function getTotaldays()
    {
        return $this->totaldays;
    }

    /**
     * Get seasonid
     *
     * @return integer
     */
    public function getSeasonid()
    {
        return $this->seasonid;
    }
}
