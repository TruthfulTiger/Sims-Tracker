<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gender
 *
 * @ORM\Table(name="gender")
 * @ORM\Entity
 */
class Gender
{
    /**
     * @var string
     *
     * @ORM\Column(name="GenderIcon", type="string", length=50, nullable=true)
     */
    private $gendericon = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="GenderName", type="string", length=50, nullable=true)
     */
    private $gendername = 'NULL';

    /**
     * @var integer
     *
     * @ORM\Column(name="GenderID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $genderid;



    /**
     * Set gendericon
     *
     * @param string $gendericon
     *
     * @return Gender
     */
    public function setGendericon($gendericon)
    {
        $this->gendericon = $gendericon;

        return $this;
    }

    /**
     * Get gendericon
     *
     * @return string
     */
    public function getGendericon()
    {
        return $this->gendericon;
    }

    /**
     * Set gendername
     *
     * @param string $gendername
     *
     * @return Gender
     */
    public function setGendername($gendername)
    {
        $this->gendername = $gendername;

        return $this;
    }

    /**
     * Get gendername
     *
     * @return string
     */
    public function getGendername()
    {
        return $this->gendername;
    }

    /**
     * Get genderid
     *
     * @return integer
     */
    public function getGenderid()
    {
        return $this->genderid;
    }
}
