<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reagent
 *
 * @ORM\Table(name="reagent")
 * @ORM\Entity
 */
class Reagent
{
    /**
     * @var string
     *
     * @ORM\Column(name="ReagentIcon", type="string", length=80, nullable=true)
     */
    private $reagenticon = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="ReagentName", type="string", length=60, nullable=false)
     */
    private $reagentname;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=100, nullable=true)
     */
    private $description = 'NULL';

    /**
     * @var integer
     *
     * @ORM\Column(name="ReagentID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $reagentid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Spell", mappedBy="reagentid")
     */
    private $spellid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->spellid = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set reagenticon
     *
     * @param string $reagenticon
     *
     * @return Reagent
     */
    public function setReagenticon($reagenticon)
    {
        $this->reagenticon = $reagenticon;

        return $this;
    }

    /**
     * Get reagenticon
     *
     * @return string
     */
    public function getReagenticon()
    {
        return $this->reagenticon;
    }

    /**
     * Set reagentname
     *
     * @param string $reagentname
     *
     * @return Reagent
     */
    public function setReagentname($reagentname)
    {
        $this->reagentname = $reagentname;

        return $this;
    }

    /**
     * Get reagentname
     *
     * @return string
     */
    public function getReagentname()
    {
        return $this->reagentname;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Reagent
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
     * Get reagentid
     *
     * @return integer
     */
    public function getReagentid()
    {
        return $this->reagentid;
    }

    /**
     * Add spellid
     *
     * @param \AppBundle\Entity\Spell $spellid
     *
     * @return Reagent
     */
    public function addSpellid(\AppBundle\Entity\Spell $spellid)
    {
        $this->spellid[] = $spellid;

        return $this;
    }

    /**
     * Remove spellid
     *
     * @param \AppBundle\Entity\Spell $spellid
     */
    public function removeSpellid(\AppBundle\Entity\Spell $spellid)
    {
        $this->spellid->removeElement($spellid);
    }

    /**
     * Get spellid
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSpellid()
    {
        return $this->spellid;
    }
}
