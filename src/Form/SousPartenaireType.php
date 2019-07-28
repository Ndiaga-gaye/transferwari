<?php

namespace App\Form;

use App\Entity\SousPartenaire;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
class SousPartenaireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Identifiant')
            ->add('Type')
            ->add('NomComplet')
            ->add('Adresse')
            ->add('NumeroIdentite')
            ->add('Contact')
            ->add('Login')
            ->add('Motdepasse')
            ->add('Datecreation')
            ->add('partenaire')
            ->add('save',SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => SousPartenaire::class,
            'csrf_protection' => false
            
        ]);
    }
}
