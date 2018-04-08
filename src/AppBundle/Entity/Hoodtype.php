<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hoodtype
 *
 * @ORM\Table(name="hoodtype", indexes={@ORM\Index(name="EPID", columns={"EPID"}), @ORM\Index(name="HoodTypeID", columns={"HoodTypeID"})})
 * @ORM\Entity
 */
class Hoodtype
{
    /**
     * @var string
     *
     * @ORM\Column(name="HoodTypeName", type="string", length=80, nullable=true)
     */
    private $hoodtypename = 'NULL';

    /**
     * @var integer
     *
     * @ORM\Column(name="HoodTypeID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $hoodtypeid;

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
     * Set hoodtypename
     *
     * @param string $hoodtypename
     *
     * @return Hoodtype
     */
    public function setHoodtypename($hoodtypename)
    {
        $this->hoodtypename = $hoodtypename;

        return $this;
    }

    /**
     * Get hoodtypename
     *
     * @return string
     */
    public function getHoodtypename()
    {
        return $this->hoodtypename;
    }

    /**
     * Get hoodtypeid
     *
     * @return integer
     */
    public function getHoodtypeid()
    {
        return $this->hoodtypeid;
    }

    /**
     * Set epid
     *
     * @param \AppBundle\Entity\Ep $epid
     *
     * @return Hoodtype
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
}
