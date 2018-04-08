<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Petpersonality
 *
 * @ORM\Table(name="petpersonality")
 * @ORM\Entity
 */
class Petpersonality
{
    /**
     * @var string
     *
     * @ORM\Column(name="PersonalityName", type="string", length=60, nullable=false)
     */
    private $personalityname;

    /**
     * @var integer
     *
     * @ORM\Column(name="PersonalityID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $personalityid;



    /**
     * Set personalityname
     *
     * @param string $personalityname
     *
     * @return Petpersonality
     */
    public function setPersonalityname($personalityname)
    {
        $this->personalityname = $personalityname;

        return $this;
    }

    /**
     * Get personalityname
     *
     * @return string
     */
    public function getPersonalityname()
    {
        return $this->personalityname;
    }

    /**
     * Get personalityid
     *
     * @return integer
     */
    public function getPersonalityid()
    {
        return $this->personalityid;
    }
}
