<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Want
 *
 * @ORM\Table(name="want", indexes={@ORM\Index(name="EPID", columns={"EPID"}), @ORM\Index(name="CareerID", columns={"CareerID"}), @ORM\Index(name="WantID", columns={"WantID"})})
 * @ORM\Entity
 */
class Want
{
    /**
     * @var string
     *
     * @ORM\Column(name="WantIcon", type="string", length=80, nullable=true)
     */
    private $wanticon = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="WantName", type="string", length=50, nullable=false)
     */
    private $wantname;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=100, nullable=true)
     */
    private $description = 'NULL';

    /**
     * @var integer
     *
     * @ORM\Column(name="CounterValue", type="integer", nullable=true)
     */
    private $countervalue = 'NULL';

    /**
     * @var integer
     *
     * @ORM\Column(name="AspPoints", type="integer", nullable=true)
     */
    private $asppoints = 'NULL';

    /**
     * @var integer
     *
     * @ORM\Column(name="InfluencePoints", type="integer", nullable=true)
     */
    private $influencepoints = 'NULL';

    /**
     * @var integer
     *
     * @ORM\Column(name="WantID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $wantid;

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
     * @var \AppBundle\Entity\Career
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Career")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CareerID", referencedColumnName="CareerID")
     * })
     */
    private $careerid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Aspiration", inversedBy="wantid")
     * @ORM\JoinTable(name="impossiblewant",
     *   joinColumns={
     *     @ORM\JoinColumn(name="WantID", referencedColumnName="WantID")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="AspirationID", referencedColumnName="AspirationID")
     *   }
     * )
     */
    private $aspirationid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->aspirationid = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set wanticon
     *
     * @param string $wanticon
     *
     * @return Want
     */
    public function setWanticon($wanticon)
    {
        $this->wanticon = $wanticon;

        return $this;
    }

    /**
     * Get wanticon
     *
     * @return string
     */
    public function getWanticon()
    {
        return $this->wanticon;
    }

    /**
     * Set wantname
     *
     * @param string $wantname
     *
     * @return Want
     */
    public function setWantname($wantname)
    {
        $this->wantname = $wantname;

        return $this;
    }

    /**
     * Get wantname
     *
     * @return string
     */
    public function getWantname()
    {
        return $this->wantname;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Want
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
     * Set countervalue
     *
     * @param integer $countervalue
     *
     * @return Want
     */
    public function setCountervalue($countervalue)
    {
        $this->countervalue = $countervalue;

        return $this;
    }

    /**
     * Get countervalue
     *
     * @return integer
     */
    public function getCountervalue()
    {
        return $this->countervalue;
    }

    /**
     * Set asppoints
     *
     * @param integer $asppoints
     *
     * @return Want
     */
    public function setAsppoints($asppoints)
    {
        $this->asppoints = $asppoints;

        return $this;
    }

    /**
     * Get asppoints
     *
     * @return integer
     */
    public function getAsppoints()
    {
        return $this->asppoints;
    }

    /**
     * Set influencepoints
     *
     * @param integer $influencepoints
     *
     * @return Want
     */
    public function setInfluencepoints($influencepoints)
    {
        $this->influencepoints = $influencepoints;

        return $this;
    }

    /**
     * Get influencepoints
     *
     * @return integer
     */
    public function getInfluencepoints()
    {
        return $this->influencepoints;
    }

    /**
     * Get wantid
     *
     * @return integer
     */
    public function getWantid()
    {
        return $this->wantid;
    }

    /**
     * Set epid
     *
     * @param \AppBundle\Entity\Ep $epid
     *
     * @return Want
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
     * Set careerid
     *
     * @param \AppBundle\Entity\Career $careerid
     *
     * @return Want
     */
    public function setCareerid(\AppBundle\Entity\Career $careerid = null)
    {
        $this->careerid = $careerid;

        return $this;
    }

    /**
     * Get careerid
     *
     * @return \AppBundle\Entity\Career
     */
    public function getCareerid()
    {
        return $this->careerid;
    }

    /**
     * Add aspirationid
     *
     * @param \AppBundle\Entity\Aspiration $aspirationid
     *
     * @return Want
     */
    public function addAspirationid(\AppBundle\Entity\Aspiration $aspirationid)
    {
        $this->aspirationid[] = $aspirationid;

        return $this;
    }

    /**
     * Remove aspirationid
     *
     * @param \AppBundle\Entity\Aspiration $aspirationid
     */
    public function removeAspirationid(\AppBundle\Entity\Aspiration $aspirationid)
    {
        $this->aspirationid->removeElement($aspirationid);
    }

    /**
     * Get aspirationid
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAspirationid()
    {
        return $this->aspirationid;
    }
}
