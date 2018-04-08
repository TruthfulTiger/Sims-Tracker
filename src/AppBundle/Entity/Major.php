<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Major
 *
 * @ORM\Table(name="major", indexes={@ORM\Index(name="MajorID", columns={"MajorID"})})
 * @ORM\Entity
 */
class Major
{
    /**
     * @var string
     *
     * @ORM\Column(name="MajorIcon", type="string", length=80, nullable=true)
     */
    private $majoricon = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="MajorName", type="string", length=50, nullable=false)
     */
    private $majorname;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=100, nullable=true)
     */
    private $description = 'NULL';

    /**
     * @var integer
     *
     * @ORM\Column(name="MajorID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $majorid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Career", inversedBy="majorid")
     * @ORM\JoinTable(name="majorcareer",
     *   joinColumns={
     *     @ORM\JoinColumn(name="MajorID", referencedColumnName="MajorID")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="CareerID", referencedColumnName="CareerID")
     *   }
     * )
     */
    private $careerid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->careerid = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set majoricon
     *
     * @param string $majoricon
     *
     * @return Major
     */
    public function setMajoricon($majoricon)
    {
        $this->majoricon = $majoricon;

        return $this;
    }

    /**
     * Get majoricon
     *
     * @return string
     */
    public function getMajoricon()
    {
        return $this->majoricon;
    }

    /**
     * Set majorname
     *
     * @param string $majorname
     *
     * @return Major
     */
    public function setMajorname($majorname)
    {
        $this->majorname = $majorname;

        return $this;
    }

    /**
     * Get majorname
     *
     * @return string
     */
    public function getMajorname()
    {
        return $this->majorname;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Major
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
     * Get majorid
     *
     * @return integer
     */
    public function getMajorid()
    {
        return $this->majorid;
    }

    /**
     * Add careerid
     *
     * @param \AppBundle\Entity\Career $careerid
     *
     * @return Major
     */
    public function addCareerid(\AppBundle\Entity\Career $careerid)
    {
        $this->careerid[] = $careerid;

        return $this;
    }

    /**
     * Remove careerid
     *
     * @param \AppBundle\Entity\Career $careerid
     */
    public function removeCareerid(\AppBundle\Entity\Career $careerid)
    {
        $this->careerid->removeElement($careerid);
    }

    /**
     * Get careerid
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCareerid()
    {
        return $this->careerid;
    }
}
