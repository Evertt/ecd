<?php

namespace IzBundle\Service;

use IzBundle\Entity\IzKlant;
use AppBundle\Filter\FilterInterface;

class KlantDao extends AbstractDao implements KlantDaoInterface
{
    protected $paginationOptions = [
        'defaultSortFieldName' => 'klant.achternaam',
        'defaultSortDirection' => 'asc',
        'sortFieldWhitelist' => [
            'klant.id',
            'klant.achternaam',
            'klant.geboortedatum',
            'klant.werkgebied',
            'klant.laatsteZrm',
            'medewerker.voornaam',
            'izProject.naam',
        ],
    ];

    protected $class = IzKlant::class;

    public function findAll($page = null, FilterInterface $filter = null)
    {
        $builder = $this->repository->createQueryBuilder('izKlant')
            ->innerJoin('izKlant.izHulpvragen', 'izHulpvraag')
            ->innerJoin('izHulpvraag.izProject', 'izProject')
            ->innerJoin('izHulpvraag.medewerker', 'medewerker')
            ->innerJoin('izKlant.klant', 'klant')
            ->where('izHulpvraag.izHulpaanbod IS NULL')
            ->andWhere('izHulpvraag.einddatum IS NULL')
            ->andWhere('izKlant.izAfsluiting IS NULL')
            ->andWhere('klant.disabled = false')
        ;

        if ($filter) {
            $filter->applyTo($builder);
        }

        if ($page) {
            return $this->paginator->paginate($builder, $page, $this->itemsPerPage, $this->paginationOptions);
        }

        return $builder->getQuery()->getResult();
    }

    public function create(IzKlant $klant)
    {
        $this->doCreate($klant);
    }

    public function update(IzKlant $klant)
    {
        $this->doUpdate($klant);
    }

    public function delete(IzKlant $klant)
    {
        $this->doDelete($klant);
    }
}
