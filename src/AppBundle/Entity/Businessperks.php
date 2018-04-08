<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Businessperks
 *
 * @ORM\Table(name="businessperks", indexes={@ORM\Index(name="BusCatID", columns={"BusCatID"}), @ORM\Index(name="PerkID", columns={"PerkID"})})
 * @ORM\Entity
 */
class Businessperks
{
    /**
     * @var string
     *
     * @ORM\Column(name="PerkIcon", type="string", length=80, nullable=true)
     */
    private $perkicon = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="PerkName", type="string", length=60, nullable=false)
     */
    private $perkname;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=100, nullable=true)
     */
    private $description = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="PerkFunction", type="string", length=50, nullable=true)
     */
    private $perkfunction = 'NULL';

    /**
     * @var integer
     *
     * @ORM\Column(name="PerkID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $perkid;

    /**
     * @var \AppBundle\Entity\Buscategory
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Buscategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="BusCatID", referencedColumnName="BusCatID")
     * })
     */
    private $buscatid;



    /**
     * Set perkicon
     *
     * @param string $perkicon
     *
     * @return Businessperks
     */
    public function setPerkicon($perkicon)
    {
        $this->perkicon = $perkicon;

        return $this;
    }

    /**
     * Get perkicon
     *
     * @return string
     */
    public function getPerkicon()
    {
        return $this->perkicon;
    }

    /**
     * Set perkname
     *
     * @param string $perkname
     *
     * @return Businessperks
     */
    public function setPerkname($perkname)
    {
        $this->perkname = $perkname;

        return $this;
    }

    /**
     * Get perkname
     *
     * @return string
     */
    public function getPerkname()
    {
        return $this->perkname;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Businessperks
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
     * Set perkfunction
     *
     * @param string $perkfunction
     *
     * @return Businessperks
     */
    public function setPerkfunction($perkfunction)
    {
        $this->perkfunction = $perkfunction;

        return $this;
    }

    /**
     * Get perkfunction
     *
     * @return string
     */
    public function getPerkfunction()
    {
        return $this->perkfunction;
    }

    /**
     * Get perkid
     *
     * @return integer
     */
    public function getPerkid()
    {
        return $this->perkid;
    }

    /**
     * Set buscatid
     *
     * @param \AppBundle\Entity\Buscategory $buscatid
     *
     * @return Businessperks
     */
    public function setBuscatid(\AppBundle\Entity\Buscategory $buscatid = null)
    {
        $this->buscatid = $buscatid;

        return $this;
    }

    /**
     * Get buscatid
     *
     * @return \AppBundle\Entity\Buscategory
     */
    public function getBuscatid()
    {
        return $this->buscatid;
    }
}
