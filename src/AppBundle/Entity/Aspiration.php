<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aspiration
 *
 * @ORM\Table(name="aspiration", indexes={@ORM\Index(name="EPID", columns={"EPID"}), @ORM\Index(name="AspirationID", columns={"AspirationID"})})
 * @ORM\Entity
 */
class Aspiration
{
    /**
     * @var string
     *
     * @ORM\Column(name="AspIcon", type="string", length=80, nullable=true)
     */
    private $aspicon = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="AspName", type="string", length=50, nullable=true)
     */
    private $aspname = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=100, nullable=true)
     */
    private $description = 'NULL';

    /**
     * @var integer
     *
     * @ORM\Column(name="AspirationID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $aspirationid;

    /**
     * @var \AppBundle\Entity\Ep
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Ep")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="EPID", referencedColumnName="EPID")
     * })
     */
    private $epid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Want", mappedBy="aspirationid")
     */
    private $wantid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->wantid = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set aspicon
     *
     * @param string $aspicon
     *
     * @return Aspiration
     */
    public function setAspicon($aspicon)
    {
        $this->aspicon = $aspicon;

        return $this;
    }

    /**
     * Get aspicon
     *
     * @return string
     */
    public function getAspicon()
    {
        return $this->aspicon;
    }

    /**
     * Set aspname
     *
     * @param string $aspname
     *
     * @return Aspiration
     */
    public function setAspname($aspname)
    {
        $this->aspname = $aspname;

        return $this;
    }

    /**
     * Get aspname
     *
     * @return string
     */
    public function getAspname()
    {
        return $this->aspname;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Aspiration
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Get aspirationid
     *
     * @return integer
     */
    public function getAspirationid()
    {
        return $this->aspirationid;
    }

    /**
     * Set epid
     *
     * @param \AppBundle\Entity\Ep $epid
     *
     * @return Aspiration
     */
    public function setEpid(\AppBundle\Entity\Ep $epid = null)
    {
        $this->epid = $epid;

        return $this;
    }

    /**
     * Get epid
     *
     * @return \AppBundle\Entity\Ep
     */
    public function getEpid()
    {
        return $this->epid;
    }

    /**
     * Add wantid
     *
     * @param \AppBundle\Entity\Want $wantid
     *
     * @return Aspiration
     */
    public function addWantid(\AppBundle\Entity\Want $wantid)
    {
        $this->wantid[] = $wantid;

        return $this;
    }

    /**
     * Remove wantid
     *
     * @param \AppBundle\Entity\Want $wantid
     */
    public function removeWantid(\AppBundle\Entity\Want $wantid)
    {
        $this->wantid->removeElement($wantid);
    }

    /**
     * Get wantid
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getWantid()
    {
        return $this->wantid;
    }
}
