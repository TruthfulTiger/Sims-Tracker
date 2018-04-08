<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Memory
 *
 * @ORM\Table(name="memory")
 * @ORM\Entity
 */
class Memory
{
    /**
     * @var string
     *
     * @ORM\Column(name="MemoryIcon", type="string", length=80, nullable=true)
     */
    private $memoryicon = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="MemoryName", type="string", length=50, nullable=false)
     */
    private $memoryname;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=100, nullable=true)
     */
    private $description = 'NULL';

    /**
     * @var boolean
     *
     * @ORM\Column(name="BadMemory", type="boolean", nullable=false)
     */
    private $badmemory;

    /**
     * @var integer
     *
     * @ORM\Column(name="MemoryID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $memoryid;



    /**
     * Set memoryicon
     *
     * @param string $memoryicon
     *
     * @return Memory
     */
    public function setMemoryicon($memoryicon)
    {
        $this->memoryicon = $memoryicon;

        return $this;
    }

    /**
     * Get memoryicon
     *
     * @return string
     */
    public function getMemoryicon()
    {
        return $this->memoryicon;
    }

    /**
     * Set memoryname
     *
     * @param string $memoryname
     *
     * @return Memory
     */
    public function setMemoryname($memoryname)
    {
        $this->memoryname = $memoryname;

        return $this;
    }

    /**
     * Get memoryname
     *
     * @return string
     */
    public function getMemoryname()
    {
        return $this->memoryname;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Memory
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set badmemory
     *
     * @param boolean $badmemory
     *
     * @return Memory
     */
    public function setBadmemory($badmemory)
    {
        $this->badmemory = $badmemory;

        return $this;
    }

    /**
     * Get badmemory
     *
     * @return boolean
     */
    public function getBadmemory()
    {
        return $this->badmemory;
    }

    /**
     * Get memoryid
     *
     * @return integer
     */
    public function getMemoryid()
    {
        return $this->memoryid;
    }
}
