<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pettrait
 *
 * @ORM\Table(name="pettrait", indexes={@ORM\Index(name="PersonalityID", columns={"PersonalityID"})})
 * @ORM\Entity
 */
class Pettrait
{
    /**
     * @var string
     *
     * @ORM\Column(name="TraitName", type="string", length=60, nullable=false)
     */
    private $traitname;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=100, nullable=true)
     */
    private $description = 'NULL';

    /**
     * @var integer
     *
     * @ORM\Column(name="TraitLevel", type="integer", nullable=false)
     */
    private $traitlevel;

    /**
     * @var integer
     *
     * @ORM\Column(name="PetTraitID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pettraitid;

    /**
     * @var \AppBundle\Entity\Petpersonality
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Petpersonality")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PersonalityID", referencedColumnName="PersonalityID")
     * })
     */
    private $personalityid;



    /**
     * Set traitname
     *
     * @param string $traitname
     *
     * @return Pettrait
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
     * Set description
     *
     * @param string $description
     *
     * @return Pettrait
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
     * Set traitlevel
     *
     * @param integer $traitlevel
     *
     * @return Pettrait
     */
    public function setTraitlevel($traitlevel)
    {
        $this->traitlevel = $traitlevel;

        return $this;
    }

    /**
     * Get traitlevel
     *
     * @return integer
     */
    public function getTraitlevel()
    {
        return $this->traitlevel;
    }

    /**
     * Get pettraitid
     *
     * @return integer
     */
    public function getPettraitid()
    {
        return $this->pettraitid;
    }

    /**
     * Set personalityid
     *
     * @param \AppBundle\Entity\Petpersonality $personalityid
     *
     * @return Pettrait
     */
    public function setPersonalityid(\AppBundle\Entity\Petpersonality $personalityid = null)
    {
        $this->personalityid = $personalityid;

        return $this;
    }

    /**
     * Get personalityid
     *
     * @return \AppBundle\Entity\Petpersonality
     */
    public function getPersonalityid()
    {
        return $this->personalityid;
    }
}
