<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Benefitcategory
 *
 * @ORM\Table(name="benefitcategory", indexes={@ORM\Index(name="AspirationID", columns={"AspirationID"}), @ORM\Index(name="BenCatID", columns={"BenCatID"})})
 * @ORM\Entity
 */
class Benefitcategory
{
    /**
     * @var string
     *
     * @ORM\Column(name="BenCatName", type="string", length=50, nullable=false)
     */
    private $bencatname;

    /**
     * @var integer
     *
     * @ORM\Column(name="BenCatID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $bencatid;

    /**
     * @var \AppBundle\Entity\Aspiration
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Aspiration")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="AspirationID", referencedColumnName="AspirationID")
     * })
     */
    private $aspirationid;



    /**
     * Set bencatname
     *
     * @param string $bencatname
     *
     * @return Benefitcategory
     */
    public function setBencatname($bencatname)
    {
        $this->bencatname = $bencatname;

        return $this;
    }

    /**
     * Get bencatname
     *
     * @return string
     */
    public function getBencatname()
    {
        return $this->bencatname;
    }

    /**
     * Get bencatid
     *
     * @return integer
     */
    public function getBencatid()
    {
        return $this->bencatid;
    }

    /**
     * Set aspirationid
     *
     * @param \AppBundle\Entity\Aspiration $aspirationid
     *
     * @return Benefitcategory
     */
    public function setAspirationid(\AppBundle\Entity\Aspiration $aspirationid = null)
    {
        $this->aspirationid = $aspirationid;

        return $this;
    }

    /**
     * Get aspirationid
     *
     * @return \AppBundle\Entity\Aspiration
     */
    public function getAspirationid()
    {
        return $this->aspirationid;
    }
}
