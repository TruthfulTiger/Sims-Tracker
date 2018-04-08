<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Year
 *
 * @ORM\Table(name="year", indexes={@ORM\Index(name="YearID", columns={"YearID"})})
 * @ORM\Entity
 */
class Year
{
    /**
     * @var string
     *
     * @ORM\Column(name="YearName", type="string", length=50, nullable=true)
     */
    private $yearname = 'NULL';

    /**
     * @var integer
     *
     * @ORM\Column(name="YearID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $yearid;



    /**
     * Set yearname
     *
     * @param string $yearname
     *
     * @return Year
     */
    public function setYearname($yearname)
    {
        $this->yearname = $yearname;

        return $this;
    }

    /**
     * Get yearname
     *
     * @return string
     */
    public function getYearname()
    {
        return $this->yearname;
    }

    /**
     * Get yearid
     *
     * @return integer
     */
    public function getYearid()
    {
        return $this->yearid;
    }
}
