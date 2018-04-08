<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Othertraits
 *
 * @ORM\Table(name="othertraits", indexes={@ORM\Index(name="EPID", columns={"EPID"}), @ORM\Index(name="TraitID", columns={"TraitID"})})
 * @ORM\Entity
 */
class Othertraits
{
    /**
     * @var string
     *
     * @ORM\Column(name="TraitIcon", type="string", length=80, nullable=true)
     */
    private $traiticon = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="TraitName", type="string", length=50, nullable=false)
     */
    private $traitname;

    /**
     * @var integer
     *
     * @ORM\Column(name="TraitID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $traitid;

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
     * Set traiticon
     *
     * @param string $traiticon
     *
     * @return Othertraits
     */
    public function setTraiticon($traiticon)
    {
        $this->traiticon = $traiticon;

        return $this;
    }

    /**
     * Get traiticon
     *
     * @return string
     */
    public function getTraiticon()
    {
        return $this->traiticon;
    }

    /**
     * Set traitname
     *
     * @param string $traitname
     *
     * @return Othertraits
     */
    public function setTraitname($traitname)
    {
        $this->traitname = $traitname;

        return $this;
    }

    /**
     * Get traitname
     *
     * @return string
     */
    public function getTraitname()
    {
        return $this->traitname;
    }

    /**
     * Get traitid
     *
     * @return integer
     */
    public function getTraitid()
    {
        return $this->traitid;
    }

    /**
     * Set epid
     *
     * @param \AppBundle\Entity\Ep $epid
     *
     * @return Othertraits
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
