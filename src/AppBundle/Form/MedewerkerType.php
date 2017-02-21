<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use AppBundle\Entity\Medewerker;
use Doctrine\ORM\EntityManager;

class MedewerkerType extends AbstractType
{
    /**
     * @var Medewerker
     */
    private $medewerker;

    public function __construct(EntityManager $entityManager)
    {
        if (isset($_SESSION['Auth']['Medewerker']['id'])) {
            $medewerkId = $_SESSION['Auth']['Medewerker']['id'];
            $this->medewerker = $entityManager->find(Medewerker::class, $medewerkId);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'class' => Medewerker::class,
            'data' => $this->medewerker,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return EntityType::class;
    }
}