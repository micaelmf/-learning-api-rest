<?php

namespace App\Controller;

use App\Entity\Clinic;
use App\Entity\Address;
use App\Form\AddressType;
use App\Form\ClinicType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class ClinicController extends AbstractController
{
    public function index()
    {
        return $this->render('clinic/index.html.twig', [
            'controller_name' => 'ClinicController',
        ]);
    }

    public function new(Request $request)
    {
        $clinic = new Clinic();

        $form = $this->createForm(ClinicType::class, $clinic)
            ->add('save', SubmitType::class, ['label' => 'Confirm']);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $clinic = $form->getData();
            
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($clinic);
            $entityManager->flush();

            return $this->redirectToRoute('clinic_edit',[
                'id' => $clinic->getId()
            ]);
        }
        
        return $this->render('clinic/new-clinic.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    public function list()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $query = $entityManager->createQuery('
            SELECT clinic FROM App\Entity\Clinic clinic'
        );
        $clinic = $query->getResult();

        return $this->render('clinic/list-clinic.html.twig', [
            'clinics' => $clinic,
        ]);
    }

    public function edit(Request $request, Clinic $clinic)
    {
        $form = $this->createForm(ClinicType::class, $clinic)
            ->add('save', SubmitType::class, ['label' => 'Confirm']);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $clinic = $form->getData();
            
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();

            return $this->redirectToRoute('clinic_edit',[
                'id' => $clinic->getId()
            ]);
        }
        
        return $this->render('clinic/edit-clinic.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    public function remove(Request $request, Clinic $clinic)
    {
        $entityManager = $this->getDoctrine('App\Entity\Clinic')->getManager();
        $entityManager->remove($clinic);
        $entityManager->flush();
        
        return $this->render('clinic/remove-clinic.html.twig',[
            'clinic' => $clinic,
        ]);
    }

}
