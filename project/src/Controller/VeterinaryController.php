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

            return $this->redirectToRoute('vet_edit',[
                'id' => $vet->getId()
            ]);
        }
        
        return $this->render('veterinary/new-veterinary.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    public function list()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $query = $entityManager->createQuery('SELECT veterinary FROM App\Entity\Veterinary veterinary');
        $vets = $query->getResult();

        return $this->render('veterinary/list-veterinary.html.twig', [
            'vets' => $vets,
        ]);
    }

    public function edit(Request $request, Veterinary $vet)
    {
        $form = $this->createForm(VeterinaryType::class, $vet)
            ->add('save', SubmitType::class, ['label' => 'Confirm']);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $vet = $form->getData();
            
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();

            return $this->redirectToRoute('vet_edit',[
                'id' => $vet->getId()
            ]);
        }
        
        return $this->render('veterinary/edit-veterinary.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    public function remove(Request $request, Veterinary $vet)
    {
        $entityManager = $this->getDoctrine('App\Entity\Veterinary')->getManager();
        $entityManager->remove($vet);
        $entityManager->flush();
        
        return $this->render('veterinary/remove-veterinary.html.twig',[
            'vet' => $vet,
        ]);
    }
}
