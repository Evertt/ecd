<?php

namespace OekBundle\Controller;

use AppBundle\Controller\SymfonyController;
use AppBundle\Entity\Klant;
use OekBundle\Entity\OekKlant;
use OekBundle\Form\OekKlantFilterType;
use Symfony\Component\Form\FormInterface;
use Doctrine\ORM\QueryBuilder;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/oek/wachtlijst")
 */
class WachtlijstController extends SymfonyController
{
    private $enabledFilters = [
        'klant' => ['id', 'naam', 'stadsdeel'],
        'groep',
        'aanmelddatum',
        'afsluitdatum',
    ];

    private $sortFieldWhitelist = [
        'klant.id',
        'klant.achternaam',
        'klant.werkgebied',
        'oekGroep.naam',
        'aanmelddatum',
        'afsluitdatum',
    ];

    /**
     * @Route("/")
     */
    public function index()
    {
        $repository = $this->getEntityManager()->getRepository(OekKlant::class);
        $builder = $repository->createQueryBuilder('oekKlant')
            ->select('oekKlant, oekAanmelding, oekAfsluiting, oekDossierStatus, oekLidmaatschap, oekGroep')
            ->innerJoin('oekKlant.klant', 'klant')
            ->leftJoin('oekKlant.oekAanmelding', 'oekAanmelding')
            ->leftJoin('oekKlant.oekAfsluiting', 'oekAfsluiting')
            ->leftJoin('oekKlant.oekDossierStatus', 'oekDossierStatus')
            ->innerJoin('oekKlant.oekLidmaatschappen', 'oekLidmaatschap')
            ->innerJoin('oekLidmaatschap.oekGroep', 'oekGroep')
            ->andWhere('klant.disabled = false')
        ;

        $filter = $this->createFilter();
        if ($filter->isValid()) {
            $filter->getData()->applyTo($builder);
            if ($filter->get('download')->isClicked()) {
                return $this->download($builder);
            }
        }

        $pagination = $this->getPaginator()->paginate($builder, $this->getRequest()->get('page', 1), 20, [
            'defaultSortFieldName' => 'klant.achternaam',
            'defaultSortDirection' => 'asc',
            'sortFieldWhitelist' => $this->sortFieldWhitelist,
            'wrap-queries' => true, // because of HAVING clause in filter
        ]);

        return ['filter' => $filter->createView(), 'pagination' => $pagination];
    }

    public function download(QueryBuilder $builder)
    {
        $oekKlanten = $builder->getQuery()->getResult();

        $filename = sprintf('op-eigen-kracht-wachtlijst-%s.csv', (new \DateTime())->format('d-m-Y'));
        $this->header('Content-type: text/csv');
        $this->header(sprintf('Content-Disposition: attachment; filename="%s";', $filename));

        return ['oekKlanten' => $oekKlanten, 'download' => false];
    }

    /**
     * @return FormInterface
     */
    private function createFilter()
    {
        $filter = $this->createForm(OekKlantFilterType::class, null, [
            'enabled_filters' => $this->enabledFilters,
        ]);
        $filter->handleRequest($this->getRequest());

        return $filter;
    }
}