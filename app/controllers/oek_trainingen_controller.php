<?php

use OekBundle\Entity\OekTraining;
use OekBundle\Form\OekTrainingType;
use AppBundle\Form\ConfirmationType;

class OekTrainingenController extends AppController
{
    /**
     * Don't use CakePHP models.
     */
    public $uses = [];

    /**
     * Use Twig.
     */
    public $view = 'AppTwig';

    private $sortFieldWhitelist = [
        'oekTraining.id',
        'oekTraining.startDatum',
        'klant.achternaam',
        'klant.werkgebied',
    ];

    public function index()
    {
        $entityManager = $this->getEntityManager();
        $repository = $entityManager->getRepository(OekTraining::class);

        $builder = $repository->createQueryBuilder('oekTraining')
            ->innerJoin('oekTraining.oekKlanten', 'oekKlanten')
            ->innerJoin('oekTraining.oekGroep', 'oekGroep')
            ->innerJoin('oekKlanten.klant', 'klant');

        $pagination = $this->getPaginator()->paginate($builder, $this->request->get('page', 1), 20, [
            'defaultSortFieldName' => 'oekTraining.startDatum',
            'defaultSortDirection' => 'asc',
            'sortFieldWhitelist' => $this->sortFieldWhitelist,
        ]);

        $this->set('pagination', $pagination);
    }

    public function view($id)
    {
        $entityManager = $this->getEntityManager();
        $repository = $entityManager->getRepository(OekTraining::class);
        $this->set('oekTraining', $repository->find($id));
    }

    public function add()
    {
        $entityManager = $this->getEntityManager();

        $oekTraining = new OekTraining();

        $form = $this->createForm(OekTrainingType::class, $oekTraining);
        $form->handleRequest($this->request);

        if ($form->isValid()) {
            $entityManager->persist($oekTraining);
            $entityManager->flush();

            $this->Session->setFlash('Training is opgeslagen.');

            return $this->redirect(array('action' => 'view', $oekTraining->getId()));
        }

        $this->set('form', $form->createView());
    }

    public function edit($id)
    {
        $entityManager = $this->getEntityManager();
        $repository = $entityManager->getRepository(OekTraining::class);
        $oekTraining = $repository->find($id);

        $form = $this->createForm(OekTrainingType::class, $oekTraining);
        $form->handleRequest($this->request);

        if ($form->isValid()) {
            $entityManager->flush();

            $this->Session->setFlash('Training is opgeslagen.');

            return $this->redirect(array('action' => 'view', $oekTraining->getId()));
        }

        $this->set('form', $form->createView());
    }

    public function delete($id)
    {
        $entityManager = $this->getEntityManager();
        $repository = $entityManager->getRepository(OekTraining::class);
        $oekTraining = $repository->find($id);

        $form = $this->createForm(ConfirmationType::class);
        $form->handleRequest($this->request);

        if ($form->isValid()) {
            $entityManager->remove($oekTraining);
            $entityManager->flush();

            $this->Session->setFlash('Training is verwijderd.');

            return $this->redirect(array('action' => 'index'));
        }

        $this->set('oekTraining', $oekTraining);
        $this->set('form', $form->createView());
    }
}