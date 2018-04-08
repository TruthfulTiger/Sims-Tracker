<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Partylevel
 *
 * @ORM\Table(name="partylevel", indexes={@ORM\Index(name="PartyLvlID", columns={"PartyLvlID"})})
 * @ORM\Entity
 */
class Partylevel
{
    /**
     * @var string
     *
     * @ORM\Column(name="PartyLevelName", type="string", length=60, nullable=false)
     */
    private $partylevelname;

    /**
     * @var integer
     *
     * @ORM\Column(name="PartyLvlID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $partylvlid;



    /**
     * Set partylevelname
     *
     * @param string $partylevelname
     *
     * @return Partylevel
     */
    public function setPartylevelname($partylevelname)
    {
        $this->partylevelname = $partylevelname;

        return $this;
    }

    /**
     * Get partylevelname
     *
     * @return string
     */
    public function getPartylevelname()
    {
        return $this->partylevelname;
    }

    /**
     * Get partylvlid
     *
     * @return integer
     */
    public function getPartylvlid()
    {
        return $this->partylvlid;
    }
}
