<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Zodiac
 *
 * @ORM\Table(name="zodiac", indexes={@ORM\Index(name="ZodiacID", columns={"ZodiacID"})})
 * @ORM\Entity
 */
class Zodiac
{
    /**
     * @var string
     *
     * @ORM\Column(name="SignIcon", type="string", length=80, nullable=true)
     */
    private $signicon = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="SignName", type="string", length=30, nullable=false)
     */
    private $signname;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=100, nullable=true)
     */
    private $description = 'NULL';

    /**
     * @var integer
     *
     * @ORM\Column(name="SloppyPoints", type="integer", nullable=false)
     */
    private $sloppypoints;

    /**
     * @var integer
     *
     * @ORM\Column(name="ShyPoints", type="integer", nullable=false)
     */
    private $shypoints;

    /**
     * @var integer
     *
     * @ORM\Column(name="ActivePoints", type="integer", nullable=false)
     */
    private $activepoints;

    /**
     * @var integer
     *
     * @ORM\Column(name="PlayfulPoints", type="integer", nullable=false)
     */
    private $playfulpoints;

    /**
     * @var integer
     *
     * @ORM\Column(name="NicePoints", type="integer", nullable=false)
     */
    private $nicepoints;

    /**
     * @var integer
     *
     * @ORM\Column(name="ZodiacID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $zodiacid;



    /**
     * Set signicon
     *
     * @param string $signicon
     *
     * @return Zodiac
     */
    public function setSignicon($signicon)
    {
        $this->signicon = $signicon;

        return $this;
    }

    /**
     * Get signicon
     *
     * @return string
     */
    public function getSignicon()
    {
        return $this->signicon;
    }

    /**
     * Set signname
     *
     * @param string $signname
     *
     * @return Zodiac
     */
    public function setSignname($signname)
    {
        $this->signname = $signname;

        return $this;
    }

    /**
     * Get signname
     *
     * @return string
     */
    public function getSignname()
    {
        return $this->signname;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Zodiac
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
     * Set sloppypoints
     *
     * @param integer $sloppypoints
     *
     * @return Zodiac
     */
    public function setSloppypoints($sloppypoints)
    {
        $this->sloppypoints = $sloppypoints;

        return $this;
    }

    /**
     * Get sloppypoints
     *
     * @return integer
     */
    public function getSloppypoints()
    {
        return $this->sloppypoints;
    }

    /**
     * Set shypoints
     *
     * @param integer $shypoints
     *
     * @return Zodiac
     */
    public function setShypoints($shypoints)
    {
        $this->shypoints = $shypoints;

        return $this;
    }

    /**
     * Get shypoints
     *
     * @return integer
     */
    public function getShypoints()
    {
        return $this->shypoints;
    }

    /**
     * Set activepoints
     *
     * @param integer $activepoints
     *
     * @return Zodiac
     */
    public function setActivepoints($activepoints)
    {
        $this->activepoints = $activepoints;

        return $this;
    }

    /**
     * Get activepoints
     *
     * @return integer
     */
    public function getActivepoints()
    {
        return $this->activepoints;
    }

    /**
     * Set playfulpoints
     *
     * @param integer $playfulpoints
     *
     * @return Zodiac
     */
    public function setPlayfulpoints($playfulpoints)
    {
        $this->playfulpoints = $playfulpoints;

        return $this;
    }

    /**
     * Get playfulpoints
     *
     * @return integer
     */
    public function getPlayfulpoints()
    {
        return $this->playfulpoints;
    }

    /**
     * Set nicepoints
     *
     * @param integer $nicepoints
     *
     * @return Zodiac
     */
    public function setNicepoints($nicepoints)
    {
        $this->nicepoints = $nicepoints;

        return $this;
    }

    /**
     * Get nicepoints
     *
     * @return integer
     */
    public function getNicepoints()
    {
        return $this->nicepoints;
    }

    /**
     * Get zodiacid
     *
     * @return integer
     */
    public function getZodiacid()
    {
        return $this->zodiacid;
    }
}
