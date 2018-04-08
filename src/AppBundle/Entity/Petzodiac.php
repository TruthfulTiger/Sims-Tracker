<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Petzodiac
 *
 * @ORM\Table(name="petzodiac", indexes={@ORM\Index(name="IntLevel", columns={"IntLevel"}), @ORM\Index(name="ActivityLevel", columns={"ActivityLevel"}), @ORM\Index(name="FriendLevel", columns={"FriendLevel"}), @ORM\Index(name="AggLevel", columns={"AggLevel"}), @ORM\Index(name="CleanLevel", columns={"CleanLevel"})})
 * @ORM\Entity
 */
class Petzodiac
{
    /**
     * @var string
     *
     * @ORM\Column(name="Icon", type="string", length=80, nullable=true)
     */
    private $icon = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=60, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="PZID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pzid;

    /**
     * @var \AppBundle\Entity\Pettrait
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Pettrait")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IntLevel", referencedColumnName="PetTraitID")
     * })
     */
    private $intlevel;

    /**
     * @var \AppBundle\Entity\Pettrait
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Pettrait")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ActivityLevel", referencedColumnName="PetTraitID")
     * })
     */
    private $activitylevel;

    /**
     * @var \AppBundle\Entity\Pettrait
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Pettrait")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FriendLevel", referencedColumnName="PetTraitID")
     * })
     */
    private $friendlevel;

    /**
     * @var \AppBundle\Entity\Pettrait
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Pettrait")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="AggLevel", referencedColumnName="PetTraitID")
     * })
     */
    private $agglevel;

    /**
     * @var \AppBundle\Entity\Pettrait
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Pettrait")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CleanLevel", referencedColumnName="PetTraitID")
     * })
     */
    private $cleanlevel;



    /**
     * Set icon
     *
     * @param string $icon
     *
     * @return Petzodiac
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get icon
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Petzodiac
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
     * Get pzid
     *
     * @return integer
     */
    public function getPzid()
    {
        return $this->pzid;
    }

    /**
     * Set intlevel
     *
     * @param \AppBundle\Entity\Pettrait $intlevel
     *
     * @return Petzodiac
     */
    public function setIntlevel(\AppBundle\Entity\Pettrait $intlevel = null)
    {
        $this->intlevel = $intlevel;

        return $this;
    }

    /**
     * Get intlevel
     *
     * @return \AppBundle\Entity\Pettrait
     */
    public function getIntlevel()
    {
        return $this->intlevel;
    }

    /**
     * Set activitylevel
     *
     * @param \AppBundle\Entity\Pettrait $activitylevel
     *
     * @return Petzodiac
     */
    public function setActivitylevel(\AppBundle\Entity\Pettrait $activitylevel = null)
    {
        $this->activitylevel = $activitylevel;

        return $this;
    }

    /**
     * Get activitylevel
     *
     * @return \AppBundle\Entity\Pettrait
     */
    public function getActivitylevel()
    {
        return $this->activitylevel;
    }

    /**
     * Set friendlevel
     *
     * @param \AppBundle\Entity\Pettrait $friendlevel
     *
     * @return Petzodiac
     */
    public function setFriendlevel(\AppBundle\Entity\Pettrait $friendlevel = null)
    {
        $this->friendlevel = $friendlevel;

        return $this;
    }

    /**
     * Get friendlevel
     *
     * @return \AppBundle\Entity\Pettrait
     */
    public function getFriendlevel()
    {
        return $this->friendlevel;
    }

    /**
     * Set agglevel
     *
     * @param \AppBundle\Entity\Pettrait $agglevel
     *
     * @return Petzodiac
     */
    public function setAgglevel(\AppBundle\Entity\Pettrait $agglevel = null)
    {
        $this->agglevel = $agglevel;

        return $this;
    }

    /**
     * Get agglevel
     *
     * @return \AppBundle\Entity\Pettrait
     */
    public function getAgglevel()
    {
        return $this->agglevel;
    }

    /**
     * Set cleanlevel
     *
     * @param \AppBundle\Entity\Pettrait $cleanlevel
     *
     * @return Petzodiac
     */
    public function setCleanlevel(\AppBundle\Entity\Pettrait $cleanlevel = null)
    {
        $this->cleanlevel = $cleanlevel;

        return $this;
    }

    /**
     * Get cleanlevel
     *
     * @return \AppBundle\Entity\Pettrait
     */
    public function getCleanlevel()
    {
        return $this->cleanlevel;
    }
}
