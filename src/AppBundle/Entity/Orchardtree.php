<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Orchardtree
 *
 * @ORM\Table(name="orchardtree", indexes={@ORM\Index(name="HarvestableID", columns={"HarvestableID"})})
 * @ORM\Entity
 */
class Orchardtree
{
    /**
     * @var string
     *
     * @ORM\Column(name="TreeName", type="string", length=60, nullable=false)
     */
    private $treename;

    /**
     * @var integer
     *
     * @ORM\Column(name="TreeID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $treeid;

    /**
     * @var \AppBundle\Entity\Harvestable
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Harvestable")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="HarvestableID", referencedColumnName="HarvestID")
     * })
     */
    private $harvestableid;



    /**
     * Set treename
     *
     * @param string $treename
     *
     * @return Orchardtree
     */
    public function setTreename($treename)
    {
        $this->treename = $treename;

        return $this;
    }

    /**
     * Get treename
     *
     * @return string
     */
    public function getTreename()
    {
        return $this->treename;
    }

    /**
     * Get treeid
     *
     * @return integer
     */
    public function getTreeid()
    {
        return $this->treeid;
    }

    /**
     * Set harvestableid
     *
     * @param \AppBundle\Entity\Harvestable $harvestableid
     *
     * @return Orchardtree
     */
    public function setHarvestableid(\AppBundle\Entity\Harvestable $harvestableid = null)
    {
        $this->harvestableid = $harvestableid;

        return $this;
    }

    /**
     * Get harvestableid
     *
     * @return \AppBundle\Entity\Harvestable
     */
    public function getHarvestableid()
    {
        return $this->harvestableid;
    }
}
