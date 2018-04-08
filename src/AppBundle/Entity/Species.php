<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Species
 *
 * @ORM\Table(name="species")
 * @ORM\Entity
 */
class Species
{
    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=50, nullable=true)
     */
    private $name = 'NULL';

    /**
     * @var integer
     *
     * @ORM\Column(name="SpeciesID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $speciesid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Petjob", inversedBy="speciesid")
     * @ORM\JoinTable(name="speciesjob",
     *   joinColumns={
     *     @ORM\JoinColumn(name="SpeciesID", referencedColumnName="SpeciesID")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="PetJobID", referencedColumnName="PetJobID")
     *   }
     * )
     */
    private $petjobid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->petjobid = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set name
     *
     * @param string $name
     *
     * @return Species
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get speciesid
     *
     * @return integer
     */
    public function getSpeciesid()
    {
        return $this->speciesid;
    }

    /**
     * Add petjobid
     *
     * @param \AppBundle\Entity\Petjob $petjobid
     *
     * @return Species
     */
    public function addPetjobid(\AppBundle\Entity\Petjob $petjobid)
    {
        $this->petjobid[] = $petjobid;

        return $this;
    }

    /**
     * Remove petjobid
     *
     * @param \AppBundle\Entity\Petjob $petjobid
     */
    public function removePetjobid(\AppBundle\Entity\Petjob $petjobid)
    {
        $this->petjobid->removeElement($petjobid);
    }

    /**
     * Get petjobid
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPetjobid()
    {
        return $this->petjobid;
    }
}
