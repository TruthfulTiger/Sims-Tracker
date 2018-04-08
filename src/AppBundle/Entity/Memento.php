<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Memento
 *
 * @ORM\Table(name="memento", indexes={@ORM\Index(name="DestID", columns={"DestID"}), @ORM\Index(name="MementoID", columns={"MementoID"})})
 * @ORM\Entity
 */
class Memento
{
    /**
     * @var string
     *
     * @ORM\Column(name="MementoIcon", type="string", length=80, nullable=true)
     */
    private $mementoicon = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="CrypticName", type="string", length=60, nullable=true)
     */
    private $crypticname = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="UnlockName", type="string", length=60, nullable=true)
     */
    private $unlockname = 'NULL';

    /**
     * @var integer
     *
     * @ORM\Column(name="MementoID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mementoid;

    /**
     * @var \AppBundle\Entity\Hoodtype
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Hoodtype")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="DestID", referencedColumnName="HoodTypeID")
     * })
     */
    private $destid;



    /**
     * Set mementoicon
     *
     * @param string $mementoicon
     *
     * @return Memento
     */
    public function setMementoicon($mementoicon)
    {
        $this->mementoicon = $mementoicon;

        return $this;
    }

    /**
     * Get mementoicon
     *
     * @return string
     */
    public function getMementoicon()
    {
        return $this->mementoicon;
    }

    /**
     * Set crypticname
     *
     * @param string $crypticname
     *
     * @return Memento
     */
    public function setCrypticname($crypticname)
    {
        $this->crypticname = $crypticname;

        return $this;
    }

    /**
     * Get crypticname
     *
     * @return string
     */
    public function getCrypticname()
    {
        return $this->crypticname;
    }

    /**
     * Set unlockname
     *
     * @param string $unlockname
     *
     * @return Memento
     */
    public function setUnlockname($unlockname)
    {
        $this->unlockname = $unlockname;

        return $this;
    }

    /**
     * Get unlockname
     *
     * @return string
     */
    public function getUnlockname()
    {
        return $this->unlockname;
    }

    /**
     * Get mementoid
     *
     * @return integer
     */
    public function getMementoid()
    {
        return $this->mementoid;
    }

    /**
     * Set destid
     *
     * @param \AppBundle\Entity\Hoodtype $destid
     *
     * @return Memento
     */
    public function setDestid(\AppBundle\Entity\Hoodtype $destid = null)
    {
        $this->destid = $destid;

        return $this;
    }

    /**
     * Get destid
     *
     * @return \AppBundle\Entity\Hoodtype
     */
    public function getDestid()
    {
        return $this->destid;
    }
}
