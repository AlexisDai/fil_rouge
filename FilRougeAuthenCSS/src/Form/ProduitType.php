<?php

namespace App\Form;

use App\Entity\Produit;
use App\Entity\Rubrique;
use App\Entity\Fournisseur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\OptionsResolver\OptionsResolver;


class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options, ): void
    {
        $builder
            ->add('libelleCourt')
            ->add('libelleLong', TextareaType::class, [
                'attr' => ['rows'=>20]
            ])
            ->add('referenceFournisseur')
            ->add('photo')
            ->add('prixAchat')
            ->add('prixHorsTaxe')
            ->add('rubrique', EntityType::class, [
                    'class' => Rubrique::class,
                    // 'choice_label' => 'getSousRubrique',
                    // 'query_builder' => function(RubriqueRepository $repo){
                    //     return $repo->createQueryBuilder('rub')->where('rub.id = null');
                    // }
                    ])
            ->add('fournisseur', EntityType::class, [
                'class' => Fournisseur::class,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}
