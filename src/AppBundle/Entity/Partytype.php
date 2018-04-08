<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Partytype
 *
 * @ORM\Table(name="partytype", indexes={@ORM\Index(name="PartyTypeID", columns={"PartyTypeID"})})
 * @ORM\Entity
 */
class Partytype
{
    /**
     * @var string
     *
     * @ORM\Column(name="PartyTypeIcon", type="string", length=80, nullable=true)
     */
    private $partytypeicon = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="PartyTypeName", type="string", length=60, nullable=false)
     */
    private $partytypename;

    /**
     * @var integer
     *
     * @ORM\Column(name="PartyTypeID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $partytypeid;



    /**
     * Set partytypeicon
     *
     * @param string $partytypeicon
     *
     * @return Partytype
     */
    public function setPartytypeicon($partytypeicon)
    {
        $this->partytypeicon = $partytypeicon;

        return $this;
    }

    /**
     * Get partytypeicon
     *
     * @return string
     */
    public function getPartytypeicon()
    {
        return $this->partytypeicon;
    }

    /**
     * Set partytypename
     *
     * @param string $partytypename
     *
     * @return Partytype
     */
    public function setPartytypename($partytypename)
    {
        $this->partytypename = $partytypename;

        return $this;
    }

    /**
     * Get partytypename
     *
     * @return string
     */
    public function getPartytypename()
    {
        return $this->partytypename;
    }

    /**
     * Get partytypeid
     *
     * @return integer
     */
    public function getPartytypeid()
    {
        return $this->partytypeid;
    }
}
