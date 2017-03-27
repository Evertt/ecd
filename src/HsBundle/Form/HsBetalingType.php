<?php

namespace HsBundle\Form;

use AppBundle\Form\BaseType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use HsBundle\Entity\HsBetaling;
use AppBundle\Form\AppDateType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;

class HsBetalingType extends BaseType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('datum', AppDateType::class)
            ->add('bedrag', MoneyType::class)
            ->add('referentie')
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => HsBetaling::class,
        ]);
    }
}
