<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Businesslist
 *
 * @ORM\Table(name="businesslist", indexes={@ORM\Index(name="BusTypeID", columns={"BusTypeID"})})
 * @ORM\Entity
 */
class Businesslist
{
    /**
     * @var string
     *
     * @ORM\Column(name="BusinessName", type="string", length=50, nullable=false)
     */
    private $businessname;

    /**
     * @var integer
     *
     * @ORM\Column(name="TotalValue", type="integer", nullable=true)
     */
    private $totalvalue = 'NULL';

    /**
     * @var integer
     *
     * @ORM\Column(name="BusinessID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $businessid;

    /**
     * @var \AppBundle\Entity\Businesstype
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Businesstype")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="BusTypeID", referencedColumnName="BusTypeID")
     * })
     */
    private $bustypeid;



    /**
     * Set businessname
     *
     * @param string $businessname
     *
     * @return Businesslist
     */
    public function setBusinessname($businessname)
    {
        $this->businessname = $businessname;

        return $this;
    }

    /**
     * Get businessname
     *
     * @return string
     */
    public function getBusinessname()
    {
        return $this->businessname;
    }

    /**
     * Set totalvalue
     *
     * @param integer $totalvalue
     *
     * @return Businesslist
     */
    public function setTotalvalue($totalvalue)
    {
        $this->totalvalue = $totalvalue;

        return $this;
    }

    /**
     * Get totalvalue
     *
     * @return integer
     */
    public function getTotalvalue()
    {
        return $this->totalvalue;
    }

    /**
     * Get businessid
     *
     * @return integer
     */
    public function getBusinessid()
    {
        return $this->businessid;
    }

    /**
     * Set bustypeid
     *
     * @param \AppBundle\Entity\Businesstype $bustypeid
     *
     * @return Businesslist
     */
    public function setBustypeid(\AppBundle\Entity\Businesstype $bustypeid = null)
    {
        $this->bustypeid = $bustypeid;

        return $this;
    }

    /**
     * Get bustypeid
     *
     * @return \AppBundle\Entity\Businesstype
     */
    public function getBustypeid()
    {
        return $this->bustypeid;
    }
}
