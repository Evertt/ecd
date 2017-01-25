<?php

namespace OdpBundle\Form;

use OdpBundle\Entity\OdpHuuraanbod;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OdpHuuraanbodType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('opmerkingen');
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => OdpHuuraanbod::class,
            'enabled_filters' => [],
        ]);
    }
}