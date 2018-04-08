<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Zodiaclikes
 *
 * @ORM\Table(name="zodiaclikes", indexes={@ORM\Index(name="Sign1ID", columns={"Sign1ID"}), @ORM\Index(name="Sign2ID", columns={"Sign2ID"}), @ORM\Index(name="IDX_F2D9AC48427CC0C1", columns={"ZodiacID"})})
 * @ORM\Entity
 */
class Zodiaclikes
{
    /**
     * @var \AppBundle\Entity\Zodiac
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Zodiac")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ZodiacID", referencedColumnName="ZodiacID")
     * })
     */
    private $zodiacid;

    /**
     * @var \AppBundle\Entity\Zodiac
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Zodiac")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Sign1ID", referencedColumnName="ZodiacID")
     * })
     */
    private $sign1id;

    /**
     * @var \AppBundle\Entity\Zodiac
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Zodiac")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Sign2ID", referencedColumnName="ZodiacID")
     * })
     */
    private $sign2id;



    /**
     * Set zodiacid
     *
     * @param \AppBundle\Entity\Zodiac $zodiacid
     *
     * @return Zodiaclikes
     */
    public function setZodiacid(\AppBundle\Entity\Zodiac $zodiacid)
    {
        $this->zodiacid = $zodiacid;

        return $this;
    }

    /**
     * Get zodiacid
     *
     * @return \AppBundle\Entity\Zodiac
     */
    public function getZodiacid()
    {
        return $this->zodiacid;
    }

    /**
     * Set sign1id
     *
     * @param \AppBundle\Entity\Zodiac $sign1id
     *
     * @return Zodiaclikes
     */
    public function setSign1id(\AppBundle\Entity\Zodiac $sign1id)
    {
        $this->sign1id = $sign1id;

        return $this;
    }

    /**
     * Get sign1id
     *
     * @return \AppBundle\Entity\Zodiac
     */
    public function getSign1id()
    {
        return $this->sign1id;
    }

    /**
     * Set sign2id
     *
     * @param \AppBundle\Entity\Zodiac $sign2id
     *
     * @return Zodiaclikes
     */
    public function setSign2id(\AppBundle\Entity\Zodiac $sign2id)
    {
        $this->sign2id = $sign2id;

        return $this;
    }

    /**
     * Get sign2id
     *
     * @return \AppBundle\Entity\Zodiac
     */
    public function getSign2id()
    {
        return $this->sign2id;
    }
}
