<?php

namespace App\Form;

use App\Entity\Pet;
use App\Entity\User;
use App\Form\AddressType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PetType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder)
    {
        $builder->add('name', TextType::class)
            ->add('dateBirth', DateType::class, ['widget' => 'single_text'])
            ->add('weight', TextType::class)
            ->add('type', TextType::class)
            ->add('breed', TextType::class)
            ->add('owner', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'userName',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Pet::class,
        ]);
    }
}
