<?php

namespace App\Form;

use App\Entity\Chantiers;
use App\Entity\Pointages;
use App\Entity\Utilisateurs;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PointagesFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dateDePointage', DateType::class, [
                'format' => 'dd/MM/yyyy',
                'placeholder' => [
                    'year' => 'Année', 'month' => 'Mois', 'day' => 'Jour',
                ],

            ])
            ->add('dureeDePointage', TimeType::class, [
                'placeholder' => [
                    'hour' => 'Heures', 'minute' => 'Minutes',
                ],
            ])
            ->add('utilisateurId', EntityType::class, [
                'label' => 'Utilisateurs',
                'placeholder' => 'Choisir un utilisateur',
                'class' => Utilisateurs::class,
            ])
            ->add('chantierId', EntityType::class,[
                'label' => 'Chantiers',
                'placeholder' => 'choisir un chantier',
                'class' => Chantiers::class,


            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Pointages::class,
        ]);
    }
}
