<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Item
 *
 * @ORM\Table(name="item", indexes={@ORM\Index(name="AlignmentID", columns={"AlignmentID"})})
 * @ORM\Entity
 */
class Item
{
    /**
     * @var string
     *
     * @ORM\Column(name="ItemName", type="string", length=80, nullable=false)
     */
    private $itemname;

    /**
     * @var integer
     *
     * @ORM\Column(name="MinLevel", type="integer", nullable=true)
     */
    private $minlevel = 'NULL';

    /**
     * @var integer
     *
     * @ORM\Column(name="ItemID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $itemid;

    /**
     * @var \AppBundle\Entity\Alignment
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Alignment")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="AlignmentID", referencedColumnName="AlignmentID")
     * })
     */
    private $alignmentid;



    /**
     * Set itemname
     *
     * @param string $itemname
     *
     * @return Item
     */
    public function setItemname($itemname)
    {
        $this->itemname = $itemname;

        return $this;
    }

    /**
     * Get itemname
     *
     * @return string
     */
    public function getItemname()
    {
        return $this->itemname;
    }

    /**
     * Set minlevel
     *
     * @param integer $minlevel
     *
     * @return Item
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
     * Get itemid
     *
     * @return integer
     */
    public function getItemid()
    {
        return $this->itemid;
    }

    /**
     * Set alignmentid
     *
     * @param \AppBundle\Entity\Alignment $alignmentid
     *
     * @return Item
     */
    public function setAlignmentid(\AppBundle\Entity\Alignment $alignmentid = null)
    {
        $this->alignmentid = $alignmentid;

        return $this;
    }

    /**
     * Get alignmentid
     *
     * @return \AppBundle\Entity\Alignment
     */
    public function getAlignmentid()
    {
        return $this->alignmentid;
    }
}
