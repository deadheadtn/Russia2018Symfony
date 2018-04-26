<?php

namespace Nesrine\JoueurBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
class JoueurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomJ')
            ->add('prenomJ')
            ->add('ageJ')
            ->add('nomEquipe')
            ->add('numeroJ')
            ->add('nbbutsJ')
            ->add('emplacementJ',ChoiceType::class,array('choices'=>array(
                'Gardien'=>'Gardien',
                'Milieu'=>'Milieu',
                'Attaquant'=>'Attaquant',
                'Défenseur'=>'Défenseur',
            )))
            ->add('file')
            ->add('appreciationJ',ChoiceType::class,array('choices'=>array(
                'Exellent'=>'Exellent',
                'Bonne'=>'Bonne',
                'Moyen'=>'Moyen',
                'Mauvais'=>'Mauvais',
            )))
            ->add('nationaliteJ')
            ->add('Ajouter', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Nesrine\JoueurBundle\Entity\Joueur'
        ));

    }

    public function getName()
    {
        return 'nesrine_joueur_bundle_joueur_type';
    }
}
