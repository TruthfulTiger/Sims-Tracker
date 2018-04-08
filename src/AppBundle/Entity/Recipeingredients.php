<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recipeingredients
 *
 * @ORM\Table(name="recipeingredients")
 * @ORM\Entity
 */
class Recipeingredients
{
    /**
     * @var integer
     *
     * @ORM\Column(name="QtyNeeded", type="integer", nullable=false)
     */
    private $qtyneeded;

    /**
     * @var integer
     *
     * @ORM\Column(name="JuiceID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $juiceid;

    /**
     * @var integer
     *
     * @ORM\Column(name="IngredientID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ingredientid;



    /**
     * Set qtyneeded
     *
     * @param integer $qtyneeded
     *
     * @return Recipeingredients
     */
    public function setQtyneeded($qtyneeded)
    {
        $this->qtyneeded = $qtyneeded;

        return $this;
    }

    /**
     * Get qtyneeded
     *
     * @return integer
     */
    public function getQtyneeded()
    {
        return $this->qtyneeded;
    }

    /**
     * Set juiceid
     *
     * @param integer $juiceid
     *
     * @return Recipeingredients
     */
    public function setJuiceid($juiceid)
    {
        $this->juiceid = $juiceid;

        return $this;
    }

    /**
     * Get juiceid
     *
     * @return integer
     */
    public function getJuiceid()
    {
        return $this->juiceid;
    }

    /**
     * Set ingredientid
     *
     * @param integer $ingredientid
     *
     * @return Recipeingredients
     */
    public function setIngredientid($ingredientid)
    {
        $this->ingredientid = $ingredientid;

        return $this;
    }

    /**
     * Get ingredientid
     *
     * @return integer
     */
    public function getIngredientid()
    {
        return $this->ingredientid;
    }
}
