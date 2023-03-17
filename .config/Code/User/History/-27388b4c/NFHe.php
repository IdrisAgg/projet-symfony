<?php

namespace App\Form;

use App\Entity\Medicament;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MedicamentFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('depotLegal')
            ->add('nomCommercial')
            ->add('code')
            ->add('composition')
            ->add('effetsIndesirable')
            ->add('contreIndication')
            ->add('prixEchantillon')
            ->add('valider',SubmitType::class)
            ->add('annuler',ResetType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Medicament::class,
        ]);
    }
}
