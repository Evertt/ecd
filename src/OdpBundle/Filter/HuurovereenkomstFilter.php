<?php

namespace OdpBundle\Filter;

use AppBundle\Form\Model\AppDateRangeModel;
use Doctrine\ORM\QueryBuilder;
use AppBundle\Filter\KlantFilter;
use AppBundle\Entity\Medewerker;

class HuurovereenkomstFilter
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var AppDateRangeModel
     */
    public $startdatum;

    /**
     * @var AppDateRangeModel
     */
    public $opzegdatum;

    /**
     * @var AppDateRangeModel
     */
    public $einddatum;

    /**
     * @var KlantFilter
     */
    public $huurderKlant;

    /**
     * @var KlantFilter
     */
    public $verhuurderKlant;

    /**
     * @var Medewerker
     */
    public $medewerker;

    public function applyTo(QueryBuilder $builder)
    {
        if ($this->id) {
            $builder
                ->andWhere('huurovereenkomst.id = :huurovereenkomst_id')
                ->setParameter('huurovereenkomst_id', $this->id)
            ;
        }

        if ($this->startdatum) {
            if ($this->startdatum->getStart()) {
                $builder
                    ->andWhere('huurovereenkomst.startdatum >= :startdatum_van')
                    ->setParameter('startdatum_van', $this->startdatum->getStart())
                ;
            }
            if ($this->startdatum->getEnd()) {
                $builder
                    ->andWhere('huurovereenkomst.startdatum <= :startdatum_tot')
                    ->setParameter('startdatum_tot', $this->startdatum->getEnd())
                ;
            }
        }

        if ($this->opzegdatum) {
            if ($this->opzegdatum->getStart()) {
                $builder
                    ->andWhere('huurovereenkomst.opzegdatum >= :opzegdatum_van')
                    ->setParameter('opzegdatum_van', $this->opzegdatum->getStart())
                ;
            }
            if ($this->opzegdatum->getEnd()) {
                $builder
                    ->andWhere('huurovereenkomst.opzegdatum <= :opzegdatum_tot')
                    ->setParameter('opzegdatum_tot', $this->opzegdatum->getEnd())
                ;
            }
        }

        if ($this->einddatum) {
            if ($this->einddatum->getStart()) {
                $builder
                    ->andWhere('huurovereenkomst.einddatum >= :einddatum_van')
                    ->setParameter('einddatum_van', $this->einddatum->getStart())
                ;
            }
            if ($this->einddatum->getEnd()) {
                $builder
                    ->andWhere('huurovereenkomst.einddatum <= :einddatum_tot')
                    ->setParameter('einddatum_tot', $this->einddatum->getEnd())
                ;
            }
        }

        if ($this->huurderKlant) {
            $this->huurderKlant->applyTo($builder, 'huurderKlant');
        }

        if ($this->verhuurderKlant) {
            $this->verhuurderKlant->applyTo($builder, 'verhuurderKlant');
        }

        if ($this->medewerker) {
            $builder
                ->andWhere('huurovereenkomst.medewerker = :medewerker')
                ->setParameter('medewerker', $this->medewerker)
            ;
        }
    }
}