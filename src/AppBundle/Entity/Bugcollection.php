<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bugcollection
 *
 * @ORM\Table(name="bugcollection", indexes={@ORM\Index(name="BugID", columns={"BugID"})})
 * @ORM\Entity
 */
class Bugcollection
{
    /**
     * @var string
     *
     * @ORM\Column(name="BugIcon", type="string", length=80, nullable=true)
     */
    private $bugicon = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="BugName", type="string", length=60, nullable=false)
     */
    private $bugname;

    /**
     * @var integer
     *
     * @ORM\Column(name="BugID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $bugid;



    /**
     * Set bugicon
     *
     * @param string $bugicon
     *
     * @return Bugcollection
     */
    public function setBugicon($bugicon)
    {
        $this->bugicon = $bugicon;

        return $this;
    }

    /**
     * Get bugicon
     *
     * @return string
     */
    public function getBugicon()
    {
        return $this->bugicon;
    }

    /**
     * Set bugname
     *
     * @param string $bugname
     *
     * @return Bugcollection
     */
    public function setBugname($bugname)
    {
        $this->bugname = $bugname;

        return $this;
    }

    /**
     * Get bugname
     *
     * @return string
     */
    public function getBugname()
    {
        return $this->bugname;
    }

    /**
     * Get bugid
     *
     * @return integer
     */
    public function getBugid()
    {
        return $this->bugid;
    }
}
