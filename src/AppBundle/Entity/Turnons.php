<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Turnons
 *
 * @ORM\Table(name="turnons", indexes={@ORM\Index(name="EPID", columns={"EPID"}), @ORM\Index(name="TOID", columns={"TOID"})})
 * @ORM\Entity
 */
class Turnons
{
    /**
     * @var string
     *
     * @ORM\Column(name="TOIcon", type="string", length=80, nullable=true)
     */
    private $toicon = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="TOName", type="string", length=60, nullable=false)
     */
    private $toname;

    /**
     * @var integer
     *
     * @ORM\Column(name="TOID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $toid;

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
     * Set toicon
     *
     * @param string $toicon
     *
     * @return Turnons
     */
    public function setToicon($toicon)
    {
        $this->toicon = $toicon;

        return $this;
    }

    /**
     * Get toicon
     *
     * @return string
     */
    public function getToicon()
    {
        return $this->toicon;
    }

    /**
     * Set toname
     *
     * @param string $toname
     *
     * @return Turnons
     */
    public function setToname($toname)
    {
        $this->toname = $toname;

        return $this;
    }

    /**
     * Get toname
     *
     * @return string
     */
    public function getToname()
    {
        return $this->toname;
    }

    /**
     * Get toid
     *
     * @return integer
     */
    public function getToid()
    {
        return $this->toid;
    }

    /**
     * Set epid
     *
     * @param \AppBundle\Entity\Ep $epid
     *
     * @return Turnons
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
