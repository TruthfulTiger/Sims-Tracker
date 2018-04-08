<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Career
 *
 * @ORM\Table(name="career", indexes={@ORM\Index(name="EPID", columns={"EPID"}), @ORM\Index(name="CareerID", columns={"CareerID"})})
 * @ORM\Entity
 */
class Career
{
    /**
     * @var string
     *
     * @ORM\Column(name="CareerIcon", type="string", length=80, nullable=true)
     */
    private $careericon = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="CareerName", type="string", length=50, nullable=false)
     */
    private $careername;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=100, nullable=true)
     */
    private $description = 'NULL';

    /**
     * @var integer
     *
     * @ORM\Column(name="CareerID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $careerid;

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
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Major", mappedBy="careerid")
     */
    private $majorid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->majorid = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set careericon
     *
     * @param string $careericon
     *
     * @return Career
     */
    public function setCareericon($careericon)
    {
        $this->careericon = $careericon;

        return $this;
    }

    /**
     * Get careericon
     *
     * @return string
     */
    public function getCareericon()
    {
        return $this->careericon;
    }

    /**
     * Set careername
     *
     * @param string $careername
     *
     * @return Career
     */
    public function setCareername($careername)
    {
        $this->careername = $careername;

        return $this;
    }

    /**
     * Get careername
     *
     * @return string
     */
    public function getCareername()
    {
        return $this->careername;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Career
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
     * Get careerid
     *
     * @return integer
     */
    public function getCareerid()
    {
        return $this->careerid;
    }

    /**
     * Set epid
     *
     * @param \AppBundle\Entity\Ep $epid
     *
     * @return Career
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
     * Add majorid
     *
     * @param \AppBundle\Entity\Major $majorid
     *
     * @return Career
     */
    public function addMajorid(\AppBundle\Entity\Major $majorid)
    {
        $this->majorid[] = $majorid;

        return $this;
    }

    /**
     * Remove majorid
     *
     * @param \AppBundle\Entity\Major $majorid
     */
    public function removeMajorid(\AppBundle\Entity\Major $majorid)
    {
        $this->majorid->removeElement($majorid);
    }

    /**
     * Get majorid
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMajorid()
    {
        return $this->majorid;
    }
}
