<?php

namespace App\Form;

use App\Entity\Partenaire;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
class PartenaireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Identifiant')
            ->add('Nom')
            ->add('Prenom')
            ->add('Adresse')
            ->add('Numeroidentite')
            ->add('Contact')
            ->add('Login')
            ->add('Motdepasse')
            ->add('Datecreation')
            ->add('adminSysteme')
            ->add('save',SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Partenaire::class,
            'csrf_protection' => false
        ]);
    }
}
