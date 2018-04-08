<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Socialrelationship
 *
 * @ORM\Table(name="socialrelationship", indexes={@ORM\Index(name="SocRelID", columns={"SocRelID"})})
 * @ORM\Entity
 */
class Socialrelationship
{
    /**
     * @var string
     *
     * @ORM\Column(name="SocRelIcon", type="string", length=80, nullable=true)
     */
    private $socrelicon = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="SocRelName", type="string", length=60, nullable=false)
     */
    private $socrelname;

    /**
     * @var integer
     *
     * @ORM\Column(name="MinSTR", type="integer", nullable=true)
     */
    private $minstr = 'NULL';

    /**
     * @var integer
     *
     * @ORM\Column(name="MinLTR", type="integer", nullable=true)
     */
    private $minltr = 'NULL';

    /**
     * @var integer
     *
     * @ORM\Column(name="SocRelID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $socrelid;



    /**
     * Set socrelicon
     *
     * @param string $socrelicon
     *
     * @return Socialrelationship
     */
    public function setSocrelicon($socrelicon)
    {
        $this->socrelicon = $socrelicon;

        return $this;
    }

    /**
     * Get socrelicon
     *
     * @return string
     */
    public function getSocrelicon()
    {
        return $this->socrelicon;
    }

    /**
     * Set socrelname
     *
     * @param string $socrelname
     *
     * @return Socialrelationship
     */
    public function setSocrelname($socrelname)
    {
        $this->socrelname = $socrelname;

        return $this;
    }

    /**
     * Get socrelname
     *
     * @return string
     */
    public function getSocrelname()
    {
        return $this->socrelname;
    }

    /**
     * Set minstr
     *
     * @param integer $minstr
     *
     * @return Socialrelationship
     */
    public function setMinstr($minstr)
    {
        $this->minstr = $minstr;

        return $this;
    }

    /**
     * Get minstr
     *
     * @return integer
     */
    public function getMinstr()
    {
        return $this->minstr;
    }

    /**
     * Set minltr
     *
     * @param integer $minltr
     *
     * @return Socialrelationship
     */
    public function setMinltr($minltr)
    {
        $this->minltr = $minltr;

        return $this;
    }

    /**
     * Get minltr
     *
     * @return integer
     */
    public function getMinltr()
    {
        return $this->minltr;
    }

    /**
     * Get socrelid
     *
     * @return integer
     */
    public function getSocrelid()
    {
        return $this->socrelid;
    }
}
