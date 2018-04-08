<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Juicerecipe
 *
 * @ORM\Table(name="juicerecipe", indexes={@ORM\Index(name="JuiceID", columns={"JuiceID"})})
 * @ORM\Entity
 */
class Juicerecipe
{
    /**
     * @var string
     *
     * @ORM\Column(name="JuiceName", type="string", length=60, nullable=false)
     */
    private $juicename;

    /**
     * @var string
     *
     * @ORM\Column(name="Effects", type="string", length=80, nullable=true)
     */
    private $effects = 'NULL';

    /**
     * @var integer
     *
     * @ORM\Column(name="JuiceID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $juiceid;



    /**
     * Set juicename
     *
     * @param string $juicename
     *
     * @return Juicerecipe
     */
    public function setJuicename($juicename)
    {
        $this->juicename = $juicename;

        return $this;
    }

    /**
     * Get juicename
     *
     * @return string
     */
    public function getJuicename()
    {
        return $this->juicename;
    }

    /**
     * Set effects
     *
     * @param string $effects
     *
     * @return Juicerecipe
     */
    public function setEffects($effects)
    {
        $this->effects = $effects;

        return $this;
    }

    /**
     * Get effects
     *
     * @return string
     */
    public function getEffects()
    {
        return $this->effects;
    }

    /**
     * Get juiceid
     *
     * @return integer
     */
    public function getJuiceid()
    {
        return $this->juiceid;
    }
}
