<?php

namespace App\Controller;

use App\Entity\Veterinary;
use App\Entity\Address;
use App\Form\AddressType;
use App\Form\VeterinaryType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class VeterinaryController extends AbstractController
{
    public function index()
    {
        return $this->render('veterinary/index.html.twig', [
            'controller_name' => 'VeterinaryController',
        ]);
    }

    public function new(Request $request)
    {
        $vet = new Veterinary();

        $form = $this->createForm(VeterinaryType::class, $vet)
            ->add('save', SubmitType::class, ['label' => 'Confirm']);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $vet = $form->getData();
            
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($vet);
            $entityManager->flush();
        }
        
        return $this->render('veterinary/new-veterinary.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
