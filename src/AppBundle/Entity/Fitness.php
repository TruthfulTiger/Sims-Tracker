<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fitness
 *
 * @ORM\Table(name="fitness")
 * @ORM\Entity
 */
class Fitness
{
    /**
     * @var string
     *
     * @ORM\Column(name="FitIcon", type="string", length=80, nullable=true)
     */
    private $fiticon = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="FitName", type="string", length=50, nullable=false)
     */
    private $fitname;

    /**
     * @var integer
     *
     * @ORM\Column(name="FitID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fitid;



    /**
     * Set fiticon
     *
     * @param string $fiticon
     *
     * @return Fitness
     */
    public function setFiticon($fiticon)
    {
        $this->fiticon = $fiticon;

        return $this;
    }

    /**
     * Get fiticon
     *
     * @return string
     */
    public function getFiticon()
    {
        return $this->fiticon;
    }

    /**
     * Set fitname
     *
     * @param string $fitname
     *
     * @return Fitness
     */
    public function setFitname($fitname)
    {
        $this->fitname = $fitname;

        return $this;
    }

    /**
     * Get fitname
     *
     * @return string
     */
    public function getFitname()
    {
        return $this->fitname;
    }

    /**
     * Get fitid
     *
     * @return integer
     */
    public function getFitid()
    {
        return $this->fitid;
    }
}
