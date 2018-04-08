<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Haircolour
 *
 * @ORM\Table(name="haircolour", indexes={@ORM\Index(name="HCID", columns={"HCID"})})
 * @ORM\Entity
 */
class Haircolour
{
    /**
     * @var string
     *
     * @ORM\Column(name="HairIcon", type="string", length=80, nullable=true)
     */
    private $hairicon = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="HairColourName", type="string", length=50, nullable=false)
     */
    private $haircolourname;

    /**
     * @var integer
     *
     * @ORM\Column(name="HCID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $hcid;



    /**
     * Set hairicon
     *
     * @param string $hairicon
     *
     * @return Haircolour
     */
    public function setHairicon($hairicon)
    {
        $this->hairicon = $hairicon;

        return $this;
    }

    /**
     * Get hairicon
     *
     * @return string
     */
    public function getHairicon()
    {
        return $this->hairicon;
    }

    /**
     * Set haircolourname
     *
     * @param string $haircolourname
     *
     * @return Haircolour
     */
    public function setHaircolourname($haircolourname)
    {
        $this->haircolourname = $haircolourname;

        return $this;
    }

    /**
     * Get haircolourname
     *
     * @return string
     */
    public function getHaircolourname()
    {
        return $this->haircolourname;
    }

    /**
     * Get hcid
     *
     * @return integer
     */
    public function getHcid()
    {
        return $this->hcid;
    }
}
