<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Petagegroup
 *
 * @ORM\Table(name="petagegroup")
 * @ORM\Entity
 */
class Petagegroup
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
     * @ORM\Column(name="Name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="Lifespan", type="integer", nullable=false)
     */
    private $lifespan;

    /**
     * @var integer
     *
     * @ORM\Column(name="PetAgeID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $petageid;



    /**
     * Set icon
     *
     * @param string $icon
     *
     * @return Petagegroup
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
     * @return Petagegroup
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
     * Set lifespan
     *
     * @param integer $lifespan
     *
     * @return Petagegroup
     */
    public function setLifespan($lifespan)
    {
        $this->lifespan = $lifespan;

        return $this;
    }

    /**
     * Get lifespan
     *
     * @return integer
     */
    public function getLifespan()
    {
        return $this->lifespan;
    }

    /**
     * Get petageid
     *
     * @return integer
     */
    public function getPetageid()
    {
        return $this->petageid;
    }
}
