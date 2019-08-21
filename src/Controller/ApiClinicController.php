<?php

namespace App\Controller;

use App\Entity\Clinic;
use App\Entity\Address;
use App\Form\ClinicType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\Response;

class ApiClinicController extends AbstractController
{
    public function list()
    {
        $clinics = $this->getDoctrine()->getRepository(Clinic::class)
            ->findAll();
        
        $encoders = [new XmlEncoder(), new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
       
        $serializer = new Serializer($normalizers, $encoders);
        $jsonContent = $serializer->serialize($clinics, 'json', [
            'ignored_attributes' => ['veterinaries']
        ]);

        return new Response($jsonContent);
    }

    public function show(Clinic $clinic)
    {
        $encoders = [new XmlEncoder(), new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
       
        $serializer = new Serializer($normalizers, $encoders);
        $jsonContent = $serializer->serialize($clinic, 'json', [
            'ignored_attributes' => ['veterinaries']
        ]);
        
        return new Response($jsonContent);
    }

    public function new(Request $request)
    {
        $address = new Address();
        $address->setStreet($request->get('street'));
        $address->setNumber($request->get('number'));
        $address->setCity($request->get('city'));
        
        $clinic = new Clinic();
        $clinic->setName($request->get('name'));
        $clinic->setAddress($address);
        
        $form = $this->createForm(ClinicType::class, $clinic);
        $form->submit($clinic);
        
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($clinic);
        $entityManager->flush();
        
        $response = new JsonResponse(['msg'=>'Clinic created whit success!'], Response::HTTP_CREATED);
        
        return $response;
    }
    
    public function edit(Request $request, Clinic $clinic)
    {
        $address = $clinic->getAddress();
        $address->setStreet($request->get('street'));
        $address->setNumber($request->get('number'));
        $address->setCity($request->get('city'));
        
        $clinic->setName($request->get('name'));
        $clinic->setAddress($address);

        $form = $this->createForm(ClinicType::class, $clinic);
        $form->submit($clinic);
        
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->flush();
        
        $response = new JsonResponse(['msg'=>'Clinic edited whit success!'], Response::HTTP_OK);
        
        return $response;
    }

    public function delete(Clinic $clinic)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($clinic);
        $entityManager->flush();

        $response = new JsonResponse(['msg'=>'Clinic deleted whit success!'], Response::HTTP_OK);
        
        return $response;
    }
}
