<?php

use OekBundle\Entity\OekTraining;
use OekBundle\Form\Model\OekTrainingModel;
use OekBundle\Form\OekTrainingKlantType;
use OekBundle\Form\OekTrainingType;
use OekBundle\Form\OekEmailMessageType;
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
        'oekTraining.naam',
        'oekGroep.naam',
        'oekTraining.startDatum',
        'oekTraining.eindDatum'
    ];

    public function index()
    {
        $entityManager = $this->getEntityManager();
        $repository = $entityManager->getRepository(OekTraining::class);

        $builder = $repository->createQueryBuilder('oekTraining')
            ->leftJoin('oekTraining.oekKlanten', 'oekKlanten')
            ->innerJoin('oekTraining.oekGroep', 'oekGroep');

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

    public function voeg_klant_toe($oekTrainingId)
    {
        /** @var OekTraining $oekTraining */
        $entityManager = $this->getEntityManager();
        $repository = $entityManager->getRepository(OekTraining::class);
        $oekTraining = $repository->find($oekTrainingId);
        $oekTrainingModel = new OekTrainingModel($oekTraining);

        $form = $this->createForm(OekTrainingKlantType::class, $oekTrainingModel);
        $form->handleRequest($this->request);

        if ($form->isValid()) {
            $entityManager->flush();

            $this->Session->setFlash('Klant is toegevoegd aan groep.');

            return $this->redirect(array('action' => 'view', $oekTraining->getId()));
        }

        $this->set('form', $form->createView());
    }

    public function email_deelnemers($oekTrainingId)
    {
        /** @var OekTraining $oekTraining */
        $oekTraining = $this->getEntityManager()->getRepository(OekTraining::class)
            ->find($oekTrainingId);

        $form = $this->createForm(OekEmailMessageType::class, null, [
            'from' => $this->Session->read('Auth.Medewerker.LdapUser.mail'),
            'to' => $oekTraining->getOekKlanten(),
        ]);
        $form->handleRequest($this->request);

        if ($form->isValid()) {
            /** @var Swift_Mailer $mailer */
            $mailer = $this->container->get('mailer');

            /** @var Swift_Mime_Message $message */
            $message = $mailer->createMessage()
                ->setFrom($form->get('from')->getData())
                ->setTo($form->get('from')->getData())
                ->setBcc(explode(', ', $form->get('to')->getData()))
                ->setSubject($form->get('subject')->getData())
                ->setBody($form->get('text')->getData(), 'text/plain')
            ;

            if ($mailer->send($message)) {
                $this->flash(__('Email is succesvol verzonden', true));
            } else {
                $this->flashError(__('Email kon niet worden verzonden', true));
            }

            return $this->redirect([
                'action' => 'view',
                $oekTraining->getId(),
            ]);
        }

        $this->set('form', $form->createView());
        $this->set('oekTraining', $oekTraining);
    }
}
