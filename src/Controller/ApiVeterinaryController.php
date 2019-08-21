<?php

namespace App\Controller;

use App\Entity\Veterinary;
use App\Entity\Clinic;
use App\Entity\Address;
use App\Form\VeterinaryType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\Response;

class ApiVeterinaryController extends AbstractController
{
    public function list()
    {
        $veterinaries = $this->getDoctrine()
            ->getRepository(Veterinary::class)
            ->findAll();
        
        $encoders = [new XmlEncoder(), new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
       
        $serializer = new Serializer($normalizers, $encoders);
        $jsonContent = $serializer->serialize($veterinaries, 'json', [
            'ignored_attributes' => ['clinic']
        ]);

        return new Response($jsonContent);
    }

    public function show(Veterinary $veterinary)
    {
        $encoders = [new XmlEncoder(), new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
       
        $serializer = new Serializer($normalizers, $encoders);
        $jsonContent = $serializer->serialize($veterinary, 'json', [
            'ignored_attributes' => ['clinic']
        ]);

        return new Response($jsonContent);
    }

    public function new(Request $request)
    {
        $address = new Address();
        $address->setStreet($request->get('street'));
        $address->setNumber($request->get('number'));
        $address->setCity($request->get('city'));
        
        $clinic = $this->getDoctrine()->getRepository('App\Entity\Clinic')
            ->find($request->get('clinic'));

        $veterinary = new Veterinary();
        $veterinary->setName($request->get('name'));
        $veterinary->setCrmv($request->get('crmv'));
        $veterinary->setAddress($address);
        $veterinary->addClinic($clinic);
        
        $form = $this->createForm(VeterinaryType::class, $veterinary);
        $form->submit($veterinary);
        
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($veterinary);
        $entityManager->flush();
        
        $response = new JsonResponse(['msg'=>'Veterinary created whit success!'], Response::HTTP_CREATED);
        
        return $response;
    }
    
    public function edit(Request $request, Veterinary $veterinary)
    {
        $address = new Address();
        $address->setStreet($request->get('street'));
        $address->setNumber($request->get('number'));
        $address->setCity($request->get('city'));
        
        $clinic = $this->getDoctrine()->getRepository('App\Entity\Clinic')
            ->find($request->get('clinic'));

        $veterinary->setName($request->get('name'));
        $veterinary->setCrmv($request->get('crmv'));
        $veterinary->setAddress($address);
        $veterinary->addClinic($clinic);
        
        $form = $this->createForm(VeterinaryType::class, $veterinary);
        $form->submit($veterinary);
        
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->flush();
        
        $response = new JsonResponse(['msg'=>'Veterinary edited whit success!'], Response::HTTP_OK);
        
        return $response;
    }

    public function delete(Veterinary $veterinary)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($veterinary);
        $entityManager->flush();

        $response = new JsonResponse(['msg'=>'Veterinary deleted whit success!'], Response::HTTP_OK);
        
        return $response;
    }
}
