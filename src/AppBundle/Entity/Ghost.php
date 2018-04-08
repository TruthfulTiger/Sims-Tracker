<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ghost
 *
 * @ORM\Table(name="ghost", indexes={@ORM\Index(name="GhostID", columns={"GhostID"})})
 * @ORM\Entity
 */
class Ghost
{
    /**
     * @var string
     *
     * @ORM\Column(name="GhostName", type="string", length=60, nullable=true)
     */
    private $ghostname = 'NULL';

    /**
     * @var integer
     *
     * @ORM\Column(name="GhostID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ghostid;



    /**
     * Set ghostname
     *
     * @param string $ghostname
     *
     * @return Ghost
     */
    public function setGhostname($ghostname)
    {
        $this->ghostname = $ghostname;

        return $this;
    }

    /**
     * Get ghostname
     *
     * @return string
     */
    public function getGhostname()
    {
        return $this->ghostname;
    }

    /**
     * Get ghostid
     *
     * @return integer
     */
    public function getGhostid()
    {
        return $this->ghostid;
    }
}
