<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Souvenir
 *
 * @ORM\Table(name="souvenir", indexes={@ORM\Index(name="DestID", columns={"DestID"}), @ORM\Index(name="SouvenirID", columns={"SouvenirID"})})
 * @ORM\Entity
 */
class Souvenir
{
    /**
     * @var string
     *
     * @ORM\Column(name="SvName", type="string", length=50, nullable=true)
     */
    private $svname = 'NULL';

    /**
     * @var integer
     *
     * @ORM\Column(name="SouvenirID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $souvenirid;

    /**
     * @var \AppBundle\Entity\Hoodtype
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Hoodtype")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="DestID", referencedColumnName="HoodTypeID")
     * })
     */
    private $destid;



    /**
     * Set svname
     *
     * @param string $svname
     *
     * @return Souvenir
     */
    public function setSvname($svname)
    {
        $this->svname = $svname;

        return $this;
    }

    /**
     * Get svname
     *
     * @return string
     */
    public function getSvname()
    {
        return $this->svname;
    }

    /**
     * Get souvenirid
     *
     * @return integer
     */
    public function getSouvenirid()
    {
        return $this->souvenirid;
    }

    /**
     * Set destid
     *
     * @param \AppBundle\Entity\Hoodtype $destid
     *
     * @return Souvenir
     */
    public function setDestid(\AppBundle\Entity\Hoodtype $destid = null)
    {
        $this->destid = $destid;

        return $this;
    }

    /**
     * Get destid
     *
     * @return \AppBundle\Entity\Hoodtype
     */
    public function getDestid()
    {
        return $this->destid;
    }
}
