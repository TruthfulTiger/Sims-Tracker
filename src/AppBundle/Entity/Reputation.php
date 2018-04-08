<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reputation
 *
 * @ORM\Table(name="reputation", indexes={@ORM\Index(name="RepID", columns={"RepID"})})
 * @ORM\Entity
 */
class Reputation
{
    /**
     * @var string
     *
     * @ORM\Column(name="RepName", type="string", length=50, nullable=false)
     */
    private $repname;

    /**
     * @var integer
     *
     * @ORM\Column(name="MinLevel", type="integer", nullable=false)
     */
    private $minlevel;

    /**
     * @var integer
     *
     * @ORM\Column(name="RepID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $repid;



    /**
     * Set repname
     *
     * @param string $repname
     *
     * @return Reputation
     */
    public function setRepname($repname)
    {
        $this->repname = $repname;

        return $this;
    }

    /**
     * Get repname
     *
     * @return string
     */
    public function getRepname()
    {
        return $this->repname;
    }

    /**
     * Set minlevel
     *
     * @param integer $minlevel
     *
     * @return Reputation
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
     * Get repid
     *
     * @return integer
     */
    public function getRepid()
    {
        return $this->repid;
    }
}
