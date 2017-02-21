<?php

use OekBundle\Form\OekVerwijzingType;
use OekBundle\Entity\OekVerwijzingDoor;

class OekVerwijzingenDoorController extends AppController
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
        'oekVerwijzing.id',
        'oekVerwijzing.naam',
    ];

    public function index()
    {
        $repository = $this->getEntityManager()->getRepository(OekVerwijzingDoor::class);

        $builder = $repository->createQueryBuilder('oekVerwijzing');

        $pagination = $this->getPaginator()->paginate($builder, $this->request->get('page', 1), 20, [
            'defaultSortFieldName' => 'oekVerwijzing.naam',
            'defaultSortDirection' => 'asc',
            'sortFieldWhitelist' => $this->sortFieldWhitelist,
        ]);

        $this->set('pagination', $pagination);
    }

    public function add()
    {
        $oekVerwijzing = new OekVerwijzingDoor();

        $form = $this->createForm(OekVerwijzingType::class, $oekVerwijzing);
        $form->handleRequest($this->request);

        if ($form->isValid()) {
            $entityManager = $this->getEntityManager();
            $entityManager->persist($oekVerwijzing);
            $entityManager->flush();

            $this->Session->setFlash('Verwijzing is aangemaakt.');

            return $this->redirect(['action' => 'index']);
        }

        $this->set('form', $form->createView());
    }

    public function edit($id)
    {
        $entityManager = $this->getEntityManager();
        $oekVerwijzing = $entityManager->find(OekVerwijzingDoor::class, $id);

        $form = $this->createForm(OekVerwijzingType::class, $oekVerwijzing);
        $form->handleRequest($this->request);
        if ($form->isValid()) {
            $entityManager->flush();

            $this->Session->setFlash('Verwijzing is gewijzigd.');

            return $this->redirect(['action' => 'index']);
        }

        $this->set('form', $form->createView());
    }
}