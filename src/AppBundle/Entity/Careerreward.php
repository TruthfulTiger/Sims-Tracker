<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Careerreward
 *
 * @ORM\Table(name="careerreward", indexes={@ORM\Index(name="CareerID", columns={"CareerID"}), @ORM\Index(name="RewardID", columns={"RewardID"})})
 * @ORM\Entity
 */
class Careerreward
{
    /**
     * @var string
     *
     * @ORM\Column(name="RewardIcon", type="string", length=80, nullable=true)
     */
    private $rewardicon = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="RewardName", type="string", length=70, nullable=false)
     */
    private $rewardname;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=100, nullable=true)
     */
    private $description = 'NULL';

    /**
     * @var integer
     *
     * @ORM\Column(name="UnlockLevel", type="integer", nullable=false)
     */
    private $unlocklevel;

    /**
     * @var integer
     *
     * @ORM\Column(name="RewardID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $rewardid;

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
     * Set rewardicon
     *
     * @param string $rewardicon
     *
     * @return Careerreward
     */
    public function setRewardicon($rewardicon)
    {
        $this->rewardicon = $rewardicon;

        return $this;
    }

    /**
     * Get rewardicon
     *
     * @return string
     */
    public function getRewardicon()
    {
        return $this->rewardicon;
    }

    /**
     * Set rewardname
     *
     * @param string $rewardname
     *
     * @return Careerreward
     */
    public function setRewardname($rewardname)
    {
        $this->rewardname = $rewardname;

        return $this;
    }

    /**
     * Get rewardname
     *
     * @return string
     */
    public function getRewardname()
    {
        return $this->rewardname;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Careerreward
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
     * Set unlocklevel
     *
     * @param integer $unlocklevel
     *
     * @return Careerreward
     */
    public function setUnlocklevel($unlocklevel)
    {
        $this->unlocklevel = $unlocklevel;

        return $this;
    }

    /**
     * Get unlocklevel
     *
     * @return integer
     */
    public function getUnlocklevel()
    {
        return $this->unlocklevel;
    }

    /**
     * Get rewardid
     *
     * @return integer
     */
    public function getRewardid()
    {
        return $this->rewardid;
    }

    /**
     * Set careerid
     *
     * @param \AppBundle\Entity\Career $careerid
     *
     * @return Careerreward
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
}
