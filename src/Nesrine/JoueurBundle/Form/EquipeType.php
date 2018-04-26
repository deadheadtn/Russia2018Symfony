<?php

namespace Nesrine\JoueurBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class EquipeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('nomEquipe')
            ->add('groupe',ChoiceType::class,array('choices'=>array(
                'A'=>'A',
                'B'=>'B',
                'C'=>'C',
                'D'=>'D',
                'E'=>'E',
                'F'=>'F',
                'G'=>'G',
                'H'=>'H',
            )))
            ->add('pays')
            ->add('file')
            ->add('classement')
            ->add('Ajouter', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {

    }

    public function getName()
    {
        return 'nesrine_joueur_bundle_equipe_type';
    }
}
