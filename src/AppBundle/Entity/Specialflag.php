<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Specialflag
 *
 * @ORM\Table(name="specialflag")
 * @ORM\Entity
 */
class Specialflag
{
    /**
     * @var string
     *
     * @ORM\Column(name="FlagName", type="string", length=50, nullable=false)
     */
    private $flagname;

    /**
     * @var integer
     *
     * @ORM\Column(name="FlagID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $flagid;



    /**
     * Set flagname
     *
     * @param string $flagname
     *
     * @return Specialflag
     */
    public function setFlagname($flagname)
    {
        $this->flagname = $flagname;

        return $this;
    }

    /**
     * Get flagname
     *
     * @return string
     */
    public function getFlagname()
    {
        return $this->flagname;
    }

    /**
     * Get flagid
     *
     * @return integer
     */
    public function getFlagid()
    {
        return $this->flagid;
    }
}
