<?php

namespace App\Form;

use App\Entity\Caissier;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
class CaissierType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Identite')
            ->add('Nom')
            ->add('Prenom')
            ->add('Adresse')
            ->add('Contact')
            ->add('NumeroIdentite')
            ->add('Login')
            ->add('Motdepasse')
            ->add('adminSysteme')
            ->add('save',SubmitType::class)

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Caissier::class,
            'csrf_protection' => false
            
        ]);
    }
}
