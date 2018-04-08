<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Petrelations
 *
 * @ORM\Table(name="petrelations")
 * @ORM\Entity
 */
class Petrelations
{
    /**
     * @var string
     *
     * @ORM\Column(name="PRIcon", type="string", length=80, nullable=true)
     */
    private $pricon = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="PRName", type="string", length=60, nullable=false)
     */
    private $prname;

    /**
     * @var integer
     *
     * @ORM\Column(name="MinLevel", type="integer", nullable=true)
     */
    private $minlevel = 'NULL';

    /**
     * @var integer
     *
     * @ORM\Column(name="PRID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $prid;



    /**
     * Set pricon
     *
     * @param string $pricon
     *
     * @return Petrelations
     */
    public function setPricon($pricon)
    {
        $this->pricon = $pricon;

        return $this;
    }

    /**
     * Get pricon
     *
     * @return string
     */
    public function getPricon()
    {
        return $this->pricon;
    }

    /**
     * Set prname
     *
     * @param string $prname
     *
     * @return Petrelations
     */
    public function setPrname($prname)
    {
        $this->prname = $prname;

        return $this;
    }

    /**
     * Get prname
     *
     * @return string
     */
    public function getPrname()
    {
        return $this->prname;
    }

    /**
     * Set minlevel
     *
     * @param integer $minlevel
     *
     * @return Petrelations
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
     * Get prid
     *
     * @return integer
     */
    public function getPrid()
    {
        return $this->prid;
    }
}
