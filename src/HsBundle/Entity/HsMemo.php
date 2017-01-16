<?php

namespace HsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\ManyToOne;
use AppBundle\Entity\Medewerker;

/**
 * @Entity
 * @Table(name="hs_memos")
 */
class HsMemo
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    private $id;

    /**
     * @var \DateTime
     * @Column(type="datetime")
     */
    private $datum;

    /**
     * @var string
     * @Column(type="text")
     */
    private $memo;

    /**
     * @var bool
     * @Column(type="boolean")
     */
    private $intake = false;

    /**
     * @var Medewerker
     * @ManyToOne(targetEntity="AppBundle\Entity\Medewerker")
     * @ORM\JoinColumn(nullable=false)
     */
    private $medewerker;

    public function __construct(Medewerker $medewerker = null)
    {
        $this->medewerker = $medewerker;
        $this->datum = new \DateTime();
    }

    public function __toString()
    {
        return sprintf('%s %s', $this->medewerker, $this->datum->format('d-m-Y H:i:s'));
    }

    public function getId()
    {
        return $this->id;
    }

    public function getDatum()
    {
        return $this->datum;
    }

    public function setDatum(\DateTime $datum)
    {
        $this->datum = $datum;

        return $this;
    }

    public function isIntake()
    {
        return $this->intake;
    }

    public function setIntake($intake)
    {
        $this->intake = $intake;

        return $this;
    }

    public function getHsVrijwilliger()
    {
        return $this->hsVrijwilliger;
    }

    public function getMedewerker()
    {
        return $this->medewerker;
    }

    public function setMedewerker(Medewerker $medewerker)
    {
        $this->medewerker = $medewerker;

        return $this;
    }

    public function getMemo()
    {
        return $this->memo;
    }

    public function setMemo($memo)
    {
        $this->memo = $memo;

        return $this;
    }
}