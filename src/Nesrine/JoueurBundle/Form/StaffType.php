<?php

namespace Nesrine\JoueurBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class StaffType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idStaff')
            ->add('nomS')
            ->add('prenomS')
            ->add('nomEquipe')
            ->add('fonctionS')
            ->add('presenceS')
            ->add('Ajouter', SubmitType::class);

    }

    public function configureOptions(OptionsResolver $resolver)
    {

    }

    public function getName()
    {
        return 'nesrine_joueur_bundle_staff_type';
    }
}
