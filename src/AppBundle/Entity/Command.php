<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Command
 *
 * @ORM\Table(name="command")
 * @ORM\Entity
 */
class Command
{
    /**
     * @var string
     *
     * @ORM\Column(name="CommandName", type="string", length=60, nullable=false)
     */
    private $commandname;

    /**
     * @var integer
     *
     * @ORM\Column(name="CommandID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $commandid;



    /**
     * Set commandname
     *
     * @param string $commandname
     *
     * @return Command
     */
    public function setCommandname($commandname)
    {
        $this->commandname = $commandname;

        return $this;
    }

    /**
     * Get commandname
     *
     * @return string
     */
    public function getCommandname()
    {
        return $this->commandname;
    }

    /**
     * Get commandid
     *
     * @return integer
     */
    public function getCommandid()
    {
        return $this->commandid;
    }
}
