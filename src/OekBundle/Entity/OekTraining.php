<?php

namespace OekBundle\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="oek_trainingen")
 * @ORM\HasLifecycleCallbacks
 */
class OekTraining
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $naam;

    /**
     * @ORM\Column(type="datetime")
     */
    private $startDatum;

    /**
     * @ORM\Column(type="time")
     */
    private $startTijd;

    /**
     * @ORM\Column(type="date")
     */
    private $eindDatum;

    /**
     * @ORM\Column(type="string")
     */
    private $locatie;

    /**
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $created;

    /**
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $modified;

    /**
     * @var ArrayCollection|OekKlant[]
     * @ORM\ManyToMany(targetEntity="OekKlant", inversedBy="oekTrainingen")
     */
    private $oekKlanten;

    /**
     * @var ArrayCollection|OekGroep[]
     * @ORM\ManyToOne(targetEntity="OekGroep", inversedBy="oekTrainingen")
     */
    private $oekGroep;

    /**
     * @ORM\PrePersist
     */
    public function onPrePersist()
    {
        $this->created = $this->modified = new DateTime();
    }

    /**
     * @ORM\PreUpdate
     */
    public function onPreUpdate()
    {
        $this->modified = new \DateTime();
    }

    /**
     * OekTraining constructor.
     * @param string   $naam
     * @param string   $locatie
     * @param DateTime $start
     * @param DateTime $eind
     * @param OekGroep $oekGroep
     */
    public function __construct($naam, $locatie, DateTime $start, DateTime $eind, OekGroep $oekGroep)
    {
        $this->naam       = $naam;
        $this->locatie    = $locatie;
        $this->startDatum = $start;
        $this->startTijd  = $start;
        $this->eindDatum  = $eind;
        $this->oekGroep   = $oekGroep;
        $this->oekKlanten = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->naam;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNaam()
    {
        return $this->naam;
    }

    public function getLocatie()
    {
        return $this->locatie;
    }

    public function getStartDatum()
    {
        return $this->startDatum;
    }

    public function getStartTijd()
    {
        return $this->startTijd;
    }

    public function getEindDatum()
    {
        return $this->eindDatum;
    }

    public function getCreated()
    {
        return $this->created;
    }

    public function getModified()
    {
        return $this->modified;
    }

    public function getOekKlanten()
    {
        return $this->oekKlanten;
    }

    public function addOekKlant(OekKlant $oekKlant)
    {
        $this->oekKlanten->add($oekKlant);

        return $this;
    }

    public function removeOekKlant(OekKlant $oekKlant)
    {
        $this->oekKlanten->remove($oekKlant);

        return $this;
    }

    public function getOekGroep()
    {
        return $this->oekGroep;
    }

    public function setOekGroep(OekGroep $oekGroep)
    {
        $this->oekGroep = $oekGroep;

        return $this;
    }
}