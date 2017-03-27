<?php

namespace OdpBundle\Form;

use AppBundle\Form\BaseType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\Klant;
use AppBundle\Filter\FilterInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use OdpBundle\Entity\Verhuurder;

class VerhuurderSelectType extends BaseType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('klant', null, [
                'required' => false,
                'query_builder' => function (EntityRepository $repository) use ($options) {
                    $builder = $repository->createQueryBuilder('klant')
                        ->leftJoin(Verhuurder::class, 'verhuurder', 'WITH', 'verhuurder.klant = klant')
                        ->andWhere('verhuurder.id IS NULL');

                    if ($options['filter'] instanceof FilterInterface) {
                        $options['filter']->applyTo($builder);
                    }

                    return $builder;
                },
            ])
            ->add('submit', SubmitType::class, ['label' => 'Opslaan'])
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Verhuurder::class,
            'filter' => null,
        ]);
    }
}
