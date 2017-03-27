<?php

namespace HsBundle\Form;

use AppBundle\Form\BaseType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\Klant;
use HsBundle\Entity\HsKlant;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use AppBundle\Filter\FilterInterface;

class HsKlantSelectType extends BaseType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('form', HiddenType::class, ['mapped' => false, 'data' => self::class])
            ->add('klant', null, [
                'required' => false,
                'query_builder' => function (EntityRepository $repository) use ($options) {
                    $builder = $repository->createQueryBuilder('klant');

                    if ($options['filter'] instanceof FilterInterface) {
                        $options['filter']->applyTo($builder);
                    }

                    $builder->leftJoin(HsKlant::class, 'hsKlant', 'WITH', 'hsKlant.klant = klant')
                        ->andWhere('hsKlant.id IS NULL');

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
            'data_class' => HsKlant::class,
            'filter' => null,
        ]);
    }
}
