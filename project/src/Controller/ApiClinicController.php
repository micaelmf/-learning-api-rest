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
        $clinics = $this->getDoctrine()->getRepository('App\Entity\Clinic')
            ->findAll();
        
        $encoders = [new XmlEncoder(), new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
       
        $serializer = new Serializer($normalizers, $encoders);
        $jsonContent = $serializer->serialize($clinics, 'json', [
            'ignored_attributes' => ['veterinaries']
        ]);

        return new Response($jsonContent);
    }

    public function show(Clinic $id)
    {
        $clinic = $this->getDoctrine()->getRepository('App\Entity\Clinic')
            ->find($id);
        
        $encoders = [new XmlEncoder(), new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
       
        $serializer = new Serializer($normalizers, $encoders);
        $jsonContent = $serializer->serialize($clinics, 'json', [
            'ignored_attributes' => ['veterinaries']
        ]);
        
        return new Response($jsonContent);
    }

    public function showAddress(Clinic $id)
    {
        $user = $this->getDoctrine()->getRepository('App\Entity\Clinic')
            ->find($id);
        $encoders = [new XmlEncoder(), new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
        
        $serializer = new Serializer($normalizers, $encoders);
        $jsonContent = $serializer->serialize($user, 'json', [
            'attributes' => ['address']
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

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($clinic);
        $entityManager->flush();
        
        return new JsonResponse(['msg' => 'Clinic created whit success!'], Response::HTTP_CREATED);
    }
    
    public function edit(Request $request, $id)
    {
        $clinic = $this->getDoctrine()->getRepository('App\Entity\Clinic')->find($id);
        
        if (empty($clinic)) {
            return new JsonResponse(['msg' => 'Clinic not found!'], Response::HTTP_NOT_FOUND);
        }
        
        $address = $clinic->getAddress();
        $address->setStreet($request->get('street'));
        $address->setNumber($request->get('number'));
        $address->setCity($request->get('city'));
        
        $clinic->setName($request->get('name'));
        $clinic->setAddress($address);

        if (!empty($clinic->getName())) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();

            return new JsonResponse(['msg' => 'Clinic edited whit success!'], Response::HTTP_OK);
        }

        return new JsonResponse(['msg' => 'Check the empty fields'], Response::HTTP_BAD_REQUEST);
    }

    public function delete($id)
    {
        $clinic = $this->getDoctrine()->getRepository('App\Entity\Clinic')->find($id);
        
        if (empty($clinic)) {
            return new JsonResponse(['msg' => 'Clinic not found!'], Response::HTTP_NOT_FOUND);
        }
        
        if (!empty($clinic)) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($clinic);
            $entityManager->flush();

            return new JsonResponse(['msg' => 'Clinic deleted whit success!'], Response::HTTP_OK);
        }

        return new JsonResponse(['msg' => 'We could not find'], Response::HTTP_BAD_REQUEST);
    }
}
