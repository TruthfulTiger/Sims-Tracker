<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fish
 *
 * @ORM\Table(name="fish", indexes={@ORM\Index(name="FishID", columns={"FishID"})})
 * @ORM\Entity
 */
class Fish
{
    /**
     * @var string
     *
     * @ORM\Column(name="FishName", type="string", length=60, nullable=false)
     */
    private $fishname;

    /**
     * @var integer
     *
     * @ORM\Column(name="SellPrice", type="integer", nullable=true)
     */
    private $sellprice = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="BadgeLevel", type="string", length=50, nullable=true)
     */
    private $badgelevel = 'NULL';

    /**
     * @var integer
     *
     * @ORM\Column(name="FishID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fishid;



    /**
     * Set fishname
     *
     * @param string $fishname
     *
     * @return Fish
     */
    public function setFishname($fishname)
    {
        $this->fishname = $fishname;

        return $this;
    }

    /**
     * Get fishname
     *
     * @return string
     */
    public function getFishname()
    {
        return $this->fishname;
    }

    /**
     * Set sellprice
     *
     * @param integer $sellprice
     *
     * @return Fish
     */
    public function setSellprice($sellprice)
    {
        $this->sellprice = $sellprice;

        return $this;
    }

    /**
     * Get sellprice
     *
     * @return integer
     */
    public function getSellprice()
    {
        return $this->sellprice;
    }

    /**
     * Set badgelevel
     *
     * @param string $badgelevel
     *
     * @return Fish
     */
    public function setBadgelevel($badgelevel)
    {
        $this->badgelevel = $badgelevel;

        return $this;
    }

    /**
     * Get badgelevel
     *
     * @return string
     */
    public function getBadgelevel()
    {
        return $this->badgelevel;
    }

    /**
     * Get fishid
     *
     * @return integer
     */
    public function getFishid()
    {
        return $this->fishid;
    }
}
