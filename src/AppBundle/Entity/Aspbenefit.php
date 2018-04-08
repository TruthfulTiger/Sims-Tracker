<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aspbenefit
 *
 * @ORM\Table(name="aspbenefit", indexes={@ORM\Index(name="BenCatID", columns={"BenCatID"}), @ORM\Index(name="BenefitID", columns={"BenefitID"})})
 * @ORM\Entity
 */
class Aspbenefit
{
    /**
     * @var string
     *
     * @ORM\Column(name="BenefitIcon", type="string", length=80, nullable=true)
     */
    private $benefiticon = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="BenefitName", type="string", length=50, nullable=false)
     */
    private $benefitname;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=255, nullable=true)
     */
    private $description = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="BenFunction", type="string", length=255, nullable=true)
     */
    private $benfunction = 'NULL';

    /**
     * @var integer
     *
     * @ORM\Column(name="BenefitID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $benefitid;

    /**
     * @var \AppBundle\Entity\Benefitcategory
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Benefitcategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="BenCatID", referencedColumnName="BenCatID")
     * })
     */
    private $bencatid;



    /**
     * Set benefiticon
     *
     * @param string $benefiticon
     *
     * @return Aspbenefit
     */
    public function setBenefiticon($benefiticon)
    {
        $this->benefiticon = $benefiticon;

        return $this;
    }

    /**
     * Get benefiticon
     *
     * @return string
     */
    public function getBenefiticon()
    {
        return $this->benefiticon;
    }

    /**
     * Set benefitname
     *
     * @param string $benefitname
     *
     * @return Aspbenefit
     */
    public function setBenefitname($benefitname)
    {
        $this->benefitname = $benefitname;

        return $this;
    }

    /**
     * Get benefitname
     *
     * @return string
     */
    public function getBenefitname()
    {
        return $this->benefitname;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Aspbenefit
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
     * Set benfunction
     *
     * @param string $benfunction
     *
     * @return Aspbenefit
     */
    public function setBenfunction($benfunction)
    {
        $this->benfunction = $benfunction;

        return $this;
    }

    /**
     * Get benfunction
     *
     * @return string
     */
    public function getBenfunction()
    {
        return $this->benfunction;
    }

    /**
     * Get benefitid
     *
     * @return integer
     */
    public function getBenefitid()
    {
        return $this->benefitid;
    }

    /**
     * Set bencatid
     *
     * @param \AppBundle\Entity\Benefitcategory $bencatid
     *
     * @return Aspbenefit
     */
    public function setBencatid(\AppBundle\Entity\Benefitcategory $bencatid = null)
    {
        $this->bencatid = $bencatid;

        return $this;
    }

    /**
     * Get bencatid
     *
     * @return \AppBundle\Entity\Benefitcategory
     */
    public function getBencatid()
    {
        return $this->bencatid;
    }
}
