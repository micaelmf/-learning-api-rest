<?php

namespace App\Form;

use App\Entity\Veterinary;
use App\Entity\Clinic;
use App\Form\ClinicType;
use App\Form\AddressType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class VeterinaryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name');
        $builder->add('crmv');
        $builder->add('address', AddressType::class);
        $builder->add('clinic', EntityType::class, [
            'class' => Clinic::class,
            'mapped' => false,
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Veterinary::class,
        ]);
    }
}