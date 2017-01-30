<?php

namespace GaBundle\Report;

use AppBundle\Report\Table;

class DeelnemersPerGroepStadsdeel extends AbstractReport
{
    protected $xDescription = 'LET OP: Stadsdeel is op basis van woonadres deelnemer (dus niet op basis van activiteitlocatie)';

    protected $yDescription = 'Stadsdeel';

    protected function init()
    {
        $this->data = $this->repository->countDeelnemersPerGroepStadsdeel($this->startDate, $this->endDate);
    }

    protected function build()
    {
        $report = new Table($this->data, 'groep', 'stadsdeel', 'aantal_unieke_deelnemers');
        $report
            ->setStartDate($this->startDate)
            ->setEndDate($this->endDate)
            ->setYNullReplacement('Onbekend')
            ->setYTotals(false)
        ;
        $this->reports[] = [
            'title' => 'Unieke deelnemers',
            'xDescription' => $this->xDescription,
            'yDescription' => $this->yDescription,
            'data' => $report->render(),
        ];

        $report = new Table($this->data, 'groep', 'stadsdeel', 'aantal_deelnemers');
        $report
            ->setStartDate($this->startDate)
            ->setEndDate($this->endDate)
            ->setYNullReplacement('Onbekend')
            ->setYTotals(false)
        ;
        $this->reports[] = [
            'title' => 'Deelnemers',
            'xDescription' => $this->xDescription,
            'yDescription' => $this->yDescription,
            'data' => $report->render(),
        ];
    }
}
