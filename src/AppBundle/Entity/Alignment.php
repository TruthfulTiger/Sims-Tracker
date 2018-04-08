<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alignment
 *
 * @ORM\Table(name="alignment")
 * @ORM\Entity
 */
class Alignment
{
    /**
     * @var string
     *
     * @ORM\Column(name="AlignmentIcon", type="string", length=80, nullable=true)
     */
    private $alignmenticon = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="AlignmentName", type="string", length=40, nullable=false)
     */
    private $alignmentname;

    /**
     * @var integer
     *
     * @ORM\Column(name="AlignmentID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $alignmentid;



    /**
     * Set alignmenticon
     *
     * @param string $alignmenticon
     *
     * @return Alignment
     */
    public function setAlignmenticon($alignmenticon)
    {
        $this->alignmenticon = $alignmenticon;

        return $this;
    }

    /**
     * Get alignmenticon
     *
     * @return string
     */
    public function getAlignmenticon()
    {
        return $this->alignmenticon;
    }

    /**
     * Set alignmentname
     *
     * @param string $alignmentname
     *
     * @return Alignment
     */
    public function setAlignmentname($alignmentname)
    {
        $this->alignmentname = $alignmentname;

        return $this;
    }

    /**
     * Get alignmentname
     *
     * @return string
     */
    public function getAlignmentname()
    {
        return $this->alignmentname;
    }

    /**
     * Get alignmentid
     *
     * @return integer
     */
    public function getAlignmentid()
    {
        return $this->alignmentid;
    }
}
