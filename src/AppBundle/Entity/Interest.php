<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Interest
 *
 * @ORM\Table(name="interest", indexes={@ORM\Index(name="InterestID", columns={"InterestID"})})
 * @ORM\Entity
 */
class Interest
{
    /**
     * @var string
     *
     * @ORM\Column(name="InterestIcon", type="string", length=80, nullable=true)
     */
    private $interesticon = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="InterestName", type="string", length=50, nullable=false)
     */
    private $interestname;

    /**
     * @var integer
     *
     * @ORM\Column(name="InterestID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $interestid;



    /**
     * Set interesticon
     *
     * @param string $interesticon
     *
     * @return Interest
     */
    public function setInteresticon($interesticon)
    {
        $this->interesticon = $interesticon;

        return $this;
    }

    /**
     * Get interesticon
     *
     * @return string
     */
    public function getInteresticon()
    {
        return $this->interesticon;
    }

    /**
     * Set interestname
     *
     * @param string $interestname
     *
     * @return Interest
     */
    public function setInterestname($interestname)
    {
        $this->interestname = $interestname;

        return $this;
    }

    /**
     * Get interestname
     *
     * @return string
     */
    public function getInterestname()
    {
        return $this->interestname;
    }

    /**
     * Get interestid
     *
     * @return integer
     */
    public function getInterestid()
    {
        return $this->interestid;
    }
}
