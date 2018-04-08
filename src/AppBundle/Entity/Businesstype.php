<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Businesstype
 *
 * @ORM\Table(name="businesstype", indexes={@ORM\Index(name="BusTypeID", columns={"BusTypeID"})})
 * @ORM\Entity
 */
class Businesstype
{
    /**
     * @var string
     *
     * @ORM\Column(name="BusTypeName", type="string", length=50, nullable=false)
     */
    private $bustypename;

    /**
     * @var integer
     *
     * @ORM\Column(name="BusTypeID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $bustypeid;



    /**
     * Set bustypename
     *
     * @param string $bustypename
     *
     * @return Businesstype
     */
    public function setBustypename($bustypename)
    {
        $this->bustypename = $bustypename;

        return $this;
    }

    /**
     * Get bustypename
     *
     * @return string
     */
    public function getBustypename()
    {
        return $this->bustypename;
    }

    /**
     * Get bustypeid
     *
     * @return integer
     */
    public function getBustypeid()
    {
        return $this->bustypeid;
    }
}
