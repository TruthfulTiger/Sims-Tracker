<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hobby
 *
 * @ORM\Table(name="hobby", indexes={@ORM\Index(name="HobbyID", columns={"HobbyID"})})
 * @ORM\Entity
 */
class Hobby
{
    /**
     * @var string
     *
     * @ORM\Column(name="HobbyIcon", type="string", length=80, nullable=true)
     */
    private $hobbyicon = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="HobbyName", type="string", length=50, nullable=false)
     */
    private $hobbyname;

    /**
     * @var integer
     *
     * @ORM\Column(name="HobbyID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $hobbyid;



    /**
     * Set hobbyicon
     *
     * @param string $hobbyicon
     *
     * @return Hobby
     */
    public function setHobbyicon($hobbyicon)
    {
        $this->hobbyicon = $hobbyicon;

        return $this;
    }

    /**
     * Get hobbyicon
     *
     * @return string
     */
    public function getHobbyicon()
    {
        return $this->hobbyicon;
    }

    /**
     * Set hobbyname
     *
     * @param string $hobbyname
     *
     * @return Hobby
     */
    public function setHobbyname($hobbyname)
    {
        $this->hobbyname = $hobbyname;

        return $this;
    }

    /**
     * Get hobbyname
     *
     * @return string
     */
    public function getHobbyname()
    {
        return $this->hobbyname;
    }

    /**
     * Get hobbyid
     *
     * @return integer
     */
    public function getHobbyid()
    {
        return $this->hobbyid;
    }
}
