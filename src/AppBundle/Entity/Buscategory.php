<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Buscategory
 *
 * @ORM\Table(name="buscategory", indexes={@ORM\Index(name="BusCatID", columns={"BusCatID"})})
 * @ORM\Entity
 */
class Buscategory
{
    /**
     * @var string
     *
     * @ORM\Column(name="BusCatName", type="string", length=50, nullable=false)
     */
    private $buscatname;

    /**
     * @var integer
     *
     * @ORM\Column(name="BusCatID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $buscatid;



    /**
     * Set buscatname
     *
     * @param string $buscatname
     *
     * @return Buscategory
     */
    public function setBuscatname($buscatname)
    {
        $this->buscatname = $buscatname;

        return $this;
    }

    /**
     * Get buscatname
     *
     * @return string
     */
    public function getBuscatname()
    {
        return $this->buscatname;
    }

    /**
     * Get buscatid
     *
     * @return integer
     */
    public function getBuscatid()
    {
        return $this->buscatid;
    }
}
