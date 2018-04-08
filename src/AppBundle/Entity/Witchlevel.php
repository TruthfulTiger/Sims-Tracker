<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Witchlevel
 *
 * @ORM\Table(name="witchlevel", indexes={@ORM\Index(name="AlignmentID", columns={"AlignmentID"})})
 * @ORM\Entity
 */
class Witchlevel
{
    /**
     * @var string
     *
     * @ORM\Column(name="LevelName", type="string", length=60, nullable=false)
     */
    private $levelname;

    /**
     * @var integer
     *
     * @ORM\Column(name="MinLevel", type="integer", nullable=false)
     */
    private $minlevel;

    /**
     * @var integer
     *
     * @ORM\Column(name="WLID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $wlid;

    /**
     * @var \AppBundle\Entity\Alignment
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Alignment")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="AlignmentID", referencedColumnName="AlignmentID")
     * })
     */
    private $alignmentid;



    /**
     * Set levelname
     *
     * @param string $levelname
     *
     * @return Witchlevel
     */
    public function setLevelname($levelname)
    {
        $this->levelname = $levelname;

        return $this;
    }

    /**
     * Get levelname
     *
     * @return string
     */
    public function getLevelname()
    {
        return $this->levelname;
    }

    /**
     * Set minlevel
     *
     * @param integer $minlevel
     *
     * @return Witchlevel
     */
    public function setMinlevel($minlevel)
    {
        $this->minlevel = $minlevel;

        return $this;
    }

    /**
     * Get minlevel
     *
     * @return integer
     */
    public function getMinlevel()
    {
        return $this->minlevel;
    }

    /**
     * Get wlid
     *
     * @return integer
     */
    public function getWlid()
    {
        return $this->wlid;
    }

    /**
     * Set alignmentid
     *
     * @param \AppBundle\Entity\Alignment $alignmentid
     *
     * @return Witchlevel
     */
    public function setAlignmentid(\AppBundle\Entity\Alignment $alignmentid = null)
    {
        $this->alignmentid = $alignmentid;

        return $this;
    }

    /**
     * Get alignmentid
     *
     * @return \AppBundle\Entity\Alignment
     */
    public function getAlignmentid()
    {
        return $this->alignmentid;
    }
}
