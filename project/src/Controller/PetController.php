<?php

namespace App\Controller;

use App\Entity\Pet;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class PetController extends AbstractController
{
    public function index()
    {
        return $this->render('pet/index.html.twig', [
            'controller_name' => 'PetController',
        ]);
    }

    public function new(Request $request)
    {
        $pet = new Pet();

        $form = $this->createFormBuilder($pet)
            ->add('name', TextType::class)
            ->add('dateBirth', DateType::class, ['widget' => 'single_text'])
            ->add('weight', TextType::class)
            ->add('type', TextType::class)
            ->add('breed', TextType::class)
            ->add('owner', EntityType::class, [
                // looks for choices from this entity
                'class' => User::class,
                // uses the User.username property as the visible option string
                'choice_label' => 'userName',
            ])
            ->add('save', SubmitType::class, ['label' => 'Confirm'])
            ->getForm();

        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $pet = $form->getData();
            
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($pet);
            $entityManager->flush();
        }
        
        return $this->render('pet/new-pet.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
