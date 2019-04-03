<?php

namespace App\Form;

use App\Entity\Logboek;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LogboekType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Begeleidsbriefnr')
            ->add('Datum')
            ->add('Chauffeur')
            ->add('Truck')
            ->add('Aantalm3')
            ->add('Laadlocatie')
            ->add('tijdvertrek')
            ->add('Bestemming')
            ->add('Evenement')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Logboek::class,
        ]);
    }
}
