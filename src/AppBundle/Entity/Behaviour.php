<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Behaviour
 *
 * @ORM\Table(name="behaviour")
 * @ORM\Entity
 */
class Behaviour
{
    /**
     * @var string
     *
     * @ORM\Column(name="Icon", type="string", length=80, nullable=true)
     */
    private $icon = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=60, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="BehaviourID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $behaviourid;



    /**
     * Set icon
     *
     * @param string $icon
     *
     * @return Behaviour
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get icon
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Behaviour
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get behaviourid
     *
     * @return integer
     */
    public function getBehaviourid()
    {
        return $this->behaviourid;
    }
}
