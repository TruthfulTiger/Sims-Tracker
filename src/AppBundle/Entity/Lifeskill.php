<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lifeskill
 *
 * @ORM\Table(name="lifeskill", indexes={@ORM\Index(name="EPID", columns={"EPID"}), @ORM\Index(name="LSID", columns={"LSID"})})
 * @ORM\Entity
 */
class Lifeskill
{
    /**
     * @var string
     *
     * @ORM\Column(name="LSIcon", type="string", length=80, nullable=true)
     */
    private $lsicon = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="LSName", type="string", length=50, nullable=false)
     */
    private $lsname;

    /**
     * @var integer
     *
     * @ORM\Column(name="LSID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $lsid;

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
     * Set lsicon
     *
     * @param string $lsicon
     *
     * @return Lifeskill
     */
    public function setLsicon($lsicon)
    {
        $this->lsicon = $lsicon;

        return $this;
    }

    /**
     * Get lsicon
     *
     * @return string
     */
    public function getLsicon()
    {
        return $this->lsicon;
    }

    /**
     * Set lsname
     *
     * @param string $lsname
     *
     * @return Lifeskill
     */
    public function setLsname($lsname)
    {
        $this->lsname = $lsname;

        return $this;
    }

    /**
     * Get lsname
     *
     * @return string
     */
    public function getLsname()
    {
        return $this->lsname;
    }

    /**
     * Get lsid
     *
     * @return integer
     */
    public function getLsid()
    {
        return $this->lsid;
    }

    /**
     * Set epid
     *
     * @param \AppBundle\Entity\Ep $epid
     *
     * @return Lifeskill
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
