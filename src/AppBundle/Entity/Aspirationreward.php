<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aspirationreward
 *
 * @ORM\Table(name="aspirationreward", indexes={@ORM\Index(name="EPID", columns={"EPID"}), @ORM\Index(name="AspRewardID", columns={"AspRewardID"})})
 * @ORM\Entity
 */
class Aspirationreward
{
    /**
     * @var string
     *
     * @ORM\Column(name="AspRewardName", type="string", length=60, nullable=false)
     */
    private $asprewardname;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=100, nullable=true)
     */
    private $description = 'NULL';

    /**
     * @var integer
     *
     * @ORM\Column(name="AspCost", type="integer", nullable=true)
     */
    private $aspcost = 'NULL';

    /**
     * @var integer
     *
     * @ORM\Column(name="AspRewardID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $asprewardid;

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
     * Set asprewardname
     *
     * @param string $asprewardname
     *
     * @return Aspirationreward
     */
    public function setAsprewardname($asprewardname)
    {
        $this->asprewardname = $asprewardname;

        return $this;
    }

    /**
     * Get asprewardname
     *
     * @return string
     */
    public function getAsprewardname()
    {
        return $this->asprewardname;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Aspirationreward
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
     * Set aspcost
     *
     * @param integer $aspcost
     *
     * @return Aspirationreward
     */
    public function setAspcost($aspcost)
    {
        $this->aspcost = $aspcost;

        return $this;
    }

    /**
     * Get aspcost
     *
     * @return integer
     */
    public function getAspcost()
    {
        return $this->aspcost;
    }

    /**
     * Get asprewardid
     *
     * @return integer
     */
    public function getAsprewardid()
    {
        return $this->asprewardid;
    }

    /**
     * Set epid
     *
     * @param \AppBundle\Entity\Ep $epid
     *
     * @return Aspirationreward
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
}
