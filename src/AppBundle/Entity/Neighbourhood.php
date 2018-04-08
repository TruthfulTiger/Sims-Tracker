<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Neighbourhood
 *
 * @ORM\Table(name="neighbourhood", indexes={@ORM\Index(name="EPID", columns={"EPID"}), @ORM\Index(name="HoodTypeID", columns={"HoodTypeID"})})
 * @ORM\Entity
 */
class Neighbourhood
{
    /**
     * @var string
     *
     * @ORM\Column(name="HoodImage", type="string", length=80, nullable=true)
     */
    private $hoodimage = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="HoodName", type="string", length=80, nullable=true)
     */
    private $hoodname = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=100, nullable=true)
     */
    private $description = 'NULL';

    /**
     * @var integer
     *
     * @ORM\Column(name="HoodID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $hoodid;

    /**
     * @var \AppBundle\Entity\Ep
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Ep")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="EPID", referencedColumnName="EPID")
     * })
     */
    private $epid;

    /**
     * @var \AppBundle\Entity\Hoodtype
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Hoodtype")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="HoodTypeID", referencedColumnName="HoodTypeID")
     * })
     */
    private $hoodtypeid;



    /**
     * Set hoodimage
     *
     * @param string $hoodimage
     *
     * @return Neighbourhood
     */
    public function setHoodimage($hoodimage)
    {
        $this->hoodimage = $hoodimage;

        return $this;
    }

    /**
     * Get hoodimage
     *
     * @return string
     */
    public function getHoodimage()
    {
        return $this->hoodimage;
    }

    /**
     * Set hoodname
     *
     * @param string $hoodname
     *
     * @return Neighbourhood
     */
    public function setHoodname($hoodname)
    {
        $this->hoodname = $hoodname;

        return $this;
    }

    /**
     * Get hoodname
     *
     * @return string
     */
    public function getHoodname()
    {
        return $this->hoodname;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Neighbourhood
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Get hoodid
     *
     * @return integer
     */
    public function getHoodid()
    {
        return $this->hoodid;
    }

    /**
     * Set epid
     *
     * @param \AppBundle\Entity\Ep $epid
     *
     * @return Neighbourhood
     */
    public function setEpid(\AppBundle\Entity\Ep $epid = null)
    {
        $this->epid = $epid;

        return $this;
    }

    /**
     * Get epid
     *
     * @return \AppBundle\Entity\Ep
     */
    public function getEpid()
    {
        return $this->epid;
    }

    /**
     * Set hoodtypeid
     *
     * @param \AppBundle\Entity\Hoodtype $hoodtypeid
     *
     * @return Neighbourhood
     */
    public function setHoodtypeid(\AppBundle\Entity\Hoodtype $hoodtypeid = null)
    {
        $this->hoodtypeid = $hoodtypeid;

        return $this;
    }

    /**
     * Get hoodtypeid
     *
     * @return \AppBundle\Entity\Hoodtype
     */
    public function getHoodtypeid()
    {
        return $this->hoodtypeid;
    }
}
