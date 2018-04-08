<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Spell
 *
 * @ORM\Table(name="spell", indexes={@ORM\Index(name="AlignmentID", columns={"AlignmentID"})})
 * @ORM\Entity
 */
class Spell
{
    /**
     * @var string
     *
     * @ORM\Column(name="SpellName", type="string", length=60, nullable=false)
     */
    private $spellname;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=100, nullable=true)
     */
    private $description = 'NULL';

    /**
     * @var integer
     *
     * @ORM\Column(name="MagicLevel", type="integer", nullable=false)
     */
    private $magiclevel;

    /**
     * @var integer
     *
     * @ORM\Column(name="SpellID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $spellid;

    /**
     * @var \AppBundle\Entity\Alignment
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Alignment")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="AlignmentID", referencedColumnName="AlignmentID")
     * })
     */
    private $alignmentid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Reagent", inversedBy="spellid")
     * @ORM\JoinTable(name="spellreagent",
     *   joinColumns={
     *     @ORM\JoinColumn(name="SpellID", referencedColumnName="SpellID")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="ReagentID", referencedColumnName="ReagentID")
     *   }
     * )
     */
    private $reagentid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reagentid = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set spellname
     *
     * @param string $spellname
     *
     * @return Spell
     */
    public function setSpellname($spellname)
    {
        $this->spellname = $spellname;

        return $this;
    }

    /**
     * Get spellname
     *
     * @return string
     */
    public function getSpellname()
    {
        return $this->spellname;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Spell
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
     * Set magiclevel
     *
     * @param integer $magiclevel
     *
     * @return Spell
     */
    public function setMagiclevel($magiclevel)
    {
        $this->magiclevel = $magiclevel;

        return $this;
    }

    /**
     * Get magiclevel
     *
     * @return integer
     */
    public function getMagiclevel()
    {
        return $this->magiclevel;
    }

    /**
     * Get spellid
     *
     * @return integer
     */
    public function getSpellid()
    {
        return $this->spellid;
    }

    /**
     * Set alignmentid
     *
     * @param \AppBundle\Entity\Alignment $alignmentid
     *
     * @return Spell
     */
    public function setAlignmentid(\AppBundle\Entity\Alignment $alignmentid = null)
    {
        $this->alignmentid = $alignmentid;

        return $this;
    }

    /**
     * Get alignmentid
     *
     * @return \AppBundle\Entity\Alignment
     */
    public function getAlignmentid()
    {
        return $this->alignmentid;
    }

    /**
     * Add reagentid
     *
     * @param \AppBundle\Entity\Reagent $reagentid
     *
     * @return Spell
     */
    public function addReagentid(\AppBundle\Entity\Reagent $reagentid)
    {
        $this->reagentid[] = $reagentid;

        return $this;
    }

    /**
     * Remove reagentid
     *
     * @param \AppBundle\Entity\Reagent $reagentid
     */
    public function removeReagentid(\AppBundle\Entity\Reagent $reagentid)
    {
        $this->reagentid->removeElement($reagentid);
    }

    /**
     * Get reagentid
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReagentid()
    {
        return $this->reagentid;
    }
}
