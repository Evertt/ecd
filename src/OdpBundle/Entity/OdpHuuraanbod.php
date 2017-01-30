<?php

namespace OdpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\TimestampableTrait;

/**
 * @ORM\Entity
 * @ORM\Table(name="odp_huuraanbiedingen")
 * @ORM\HasLifecycleCallbacks
 */
class OdpHuuraanbod
{
    use TimestampableTrait;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @var OdpVerhuurder
     * @ORM\ManyToOne(targetEntity="OdpVerhuurder", inversedBy="odpHuuraanbiedingen")
     */
    private $odpVerhuurder;

    /**
     * @var OdpHuurovereenkomst
     * @ORM\OneToOne(targetEntity="OdpHuurovereenkomst", mappedBy="odpHuuraanbod")
     */
    private $odpHuurovereenkomst;

    /**
     * @var string
     * @ORM\Column(type="text")
     */
    private $opmerkingen;

    public function getId()
    {
        return $this->id;
    }

    public function getOdpVerhuurder()
    {
        return $this->odpVerhuurder;
    }

    public function setOdpVerhuurder(OdpVerhuurder $odpVerhuurder)
    {
        $this->odpVerhuurder = $odpVerhuurder;

        return $this;
    }

    public function getKlant()
    {
        return $this->odpVerhuurder->getKlant();
    }

    public function getOpmerkingen()
    {
        return $this->opmerkingen;
    }

    public function setOpmerkingen($opmerkingen)
    {
        $this->opmerkingen = $opmerkingen;
    }

    public function getOdpHuurovereenkomst()
    {
        return $this->odpHuurovereenkomst;
    }

    public function isDeletable()
    {
        return false;
    }

    public function __toString()
    {
        return (string) $this->id;
    }
}