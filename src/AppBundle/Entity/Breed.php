<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Breed
 *
 * @ORM\Table(name="breed", indexes={@ORM\Index(name="SpeciesID", columns={"SpeciesID"})})
 * @ORM\Entity
 */
class Breed
{
    /**
     * @var string
     *
     * @ORM\Column(name="BreedName", type="string", length=60, nullable=false)
     */
    private $breedname;

    /**
     * @var integer
     *
     * @ORM\Column(name="BreedID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Species
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Species")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="SpeciesID", referencedColumnName="SpeciesID")
     * })
     */
    private $speciesid;



    /**
     * Set breedname
     *
     * @param string $breedname
     *
     * @return Breed
     */
    public function setBreedname($breedname)
    {
        $this->breedname = $breedname;

        return $this;
    }

    /**
     * Get breedname
     *
     * @return string
     */
    public function getBreedname()
    {
        return $this->breedname;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Set speciesid
     *
     * @param \AppBundle\Entity\Species $speciesid
     *
     * @return Breed
     */
    public function setSpeciesid(\AppBundle\Entity\Species $speciesid = null)
    {
        $this->speciesid = $speciesid;

        return $this;
    }

    /**
     * Get speciesid
     *
     * @return \AppBundle\Entity\Species
     */
    public function getSpeciesid()
    {
        return $this->speciesid;
    }
}
