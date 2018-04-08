<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Harvestable
 *
 * @ORM\Table(name="harvestable", indexes={@ORM\Index(name="OptimalSeasonID", columns={"OptimalSeasonID"}), @ORM\Index(name="HarvestID", columns={"HarvestID"})})
 * @ORM\Entity
 */
class Harvestable
{
    /**
     * @var string
     *
     * @ORM\Column(name="ProduceName", type="string", length=60, nullable=false)
     */
    private $producename;

    /**
     * @var integer
     *
     * @ORM\Column(name="OptimalSeasonDay", type="integer", nullable=true)
     */
    private $optimalseasonday = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="BadgeLevel", type="string", length=50, nullable=true)
     */
    private $badgelevel = 'NULL';

    /**
     * @var integer
     *
     * @ORM\Column(name="CostPrice", type="integer", nullable=true)
     */
    private $costprice = 'NULL';

    /**
     * @var integer
     *
     * @ORM\Column(name="HarvestID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $harvestid;

    /**
     * @var \AppBundle\Entity\Season
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Season")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="OptimalSeasonID", referencedColumnName="SeasonID")
     * })
     */
    private $optimalseasonid;



    /**
     * Set producename
     *
     * @param string $producename
     *
     * @return Harvestable
     */
    public function setProducename($producename)
    {
        $this->producename = $producename;

        return $this;
    }

    /**
     * Get producename
     *
     * @return string
     */
    public function getProducename()
    {
        return $this->producename;
    }

    /**
     * Set optimalseasonday
     *
     * @param integer $optimalseasonday
     *
     * @return Harvestable
     */
    public function setOptimalseasonday($optimalseasonday)
    {
        $this->optimalseasonday = $optimalseasonday;

        return $this;
    }

    /**
     * Get optimalseasonday
     *
     * @return integer
     */
    public function getOptimalseasonday()
    {
        return $this->optimalseasonday;
    }

    /**
     * Set badgelevel
     *
     * @param string $badgelevel
     *
     * @return Harvestable
     */
    public function setBadgelevel($badgelevel)
    {
        $this->badgelevel = $badgelevel;

        return $this;
    }

    /**
     * Get badgelevel
     *
     * @return string
     */
    public function getBadgelevel()
    {
        return $this->badgelevel;
    }

    /**
     * Set costprice
     *
     * @param integer $costprice
     *
     * @return Harvestable
     */
    public function setCostprice($costprice)
    {
        $this->costprice = $costprice;

        return $this;
    }

    /**
     * Get costprice
     *
     * @return integer
     */
    public function getCostprice()
    {
        return $this->costprice;
    }

    /**
     * Get harvestid
     *
     * @return integer
     */
    public function getHarvestid()
    {
        return $this->harvestid;
    }

    /**
     * Set optimalseasonid
     *
     * @param \AppBundle\Entity\Season $optimalseasonid
     *
     * @return Harvestable
     */
    public function setOptimalseasonid(\AppBundle\Entity\Season $optimalseasonid = null)
    {
        $this->optimalseasonid = $optimalseasonid;

        return $this;
    }

    /**
     * Get optimalseasonid
     *
     * @return \AppBundle\Entity\Season
     */
    public function getOptimalseasonid()
    {
        return $this->optimalseasonid;
    }
}
