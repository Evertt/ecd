<?php

namespace GaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Vrijwilliger;

/**
 * @ORM\Entity
 */
class GaVrijwilligerIntake extends GaIntake
{
    /**
     * @var Vrijwilliger
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Vrijwilliger")
     * @ORM\JoinColumn(name="foreign_key", nullable=false)
     */
    protected $vrijwilliger;
}
