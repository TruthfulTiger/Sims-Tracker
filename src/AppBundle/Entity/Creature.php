<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Creature
 *
 * @ORM\Table(name="creature", indexes={@ORM\Index(name="EPID", columns={"EPID"}), @ORM\Index(name="CreatureID", columns={"CreatureID"})})
 * @ORM\Entity
 */
class Creature
{
    /**
     * @var string
     *
     * @ORM\Column(name="CreatureIcon", type="string", length=80, nullable=true)
     */
    private $creatureicon = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="CreatureName", type="string", length=50, nullable=false)
     */
    private $creaturename;

    /**
     * @var boolean
     *
     * @ORM\Column(name="IsImmortal", type="boolean", nullable=false)
     */
    private $isimmortal;

    /**
     * @var integer
     *
     * @ORM\Column(name="CreatureID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $creatureid;

    /**
     * @var \AppBundle\Entity\Ep
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Ep")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="EPID", referencedColumnName="EPID")
     * })
     */
    private $epid;



    /**
     * Set creatureicon
     *
     * @param string $creatureicon
     *
     * @return Creature
     */
    public function setCreatureicon($creatureicon)
    {
        $this->creatureicon = $creatureicon;

        return $this;
    }

    /**
     * Get creatureicon
     *
     * @return string
     */
    public function getCreatureicon()
    {
        return $this->creatureicon;
    }

    /**
     * Set creaturename
     *
     * @param string $creaturename
     *
     * @return Creature
     */
    public function setCreaturename($creaturename)
    {
        $this->creaturename = $creaturename;

        return $this;
    }

    /**
     * Get creaturename
     *
     * @return string
     */
    public function getCreaturename()
    {
        return $this->creaturename;
    }

    /**
     * Set isimmortal
     *
     * @param boolean $isimmortal
     *
     * @return Creature
     */
    public function setIsimmortal($isimmortal)
    {
        $this->isimmortal = $isimmortal;

        return $this;
    }

    /**
     * Get isimmortal
     *
     * @return boolean
     */
    public function getIsimmortal()
    {
        return $this->isimmortal;
    }

    /**
     * Get creatureid
     *
     * @return integer
     */
    public function getCreatureid()
    {
        return $this->creatureid;
    }

    /**
     * Set epid
     *
     * @param \AppBundle\Entity\Ep $epid
     *
     * @return Creature
     */
    public function setEpid(\AppBundle\Entity\Ep $epid = null)
    {
        $this->epid = $epid;

        return $this;
    }

    /**
     * Get epid
     *
     * @return \AppBundle\Entity\Ep
     */
    public function getEpid()
    {
        return $this->epid;
    }
}
