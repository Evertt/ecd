<?php

namespace IzBundle\Form;

use AppBundle\Form\BaseType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\Klant;
use AppBundle\Filter\FilterInterface;
use IzBundle\Entity\IzKlant;

class IzKlantSelectType extends BaseType
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
                    $builder = $repository->createQueryBuilder('klant');

                    if ($options['filter'] instanceof FilterInterface) {
                        $options['filter']->applyTo($builder);
                    }

                    $builder->leftJoin(IzKlant::class, 'izKlant', 'WITH', 'izKlant.klant = klant')
                        ->andWhere('izKlant.id IS NULL');

                    return $builder;
                },
            ])
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => IzKlant::class,
            'filter' => null,
        ]);
    }
}
