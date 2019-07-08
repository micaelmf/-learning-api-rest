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
    public function index()
    {
        return new JsonResponse(['status' => 'ok']);
    }

    public function list()
    {
        $veterinaries = $this->getDoctrine()
            ->getRepository('App\Entity\Veterinary')
            ->findAll();
        
        $encoders = [new XmlEncoder(), new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
       
        $serializer = new Serializer($normalizers, $encoders);
        $jsonContent = $serializer->serialize($veterinaries, 'json', [
            'circular_reference_handler' => function ($object) {
                return $object->getId();
            }
        ]);

        return new Response($jsonContent);
        
    }

    public function show(Veterinary $id)
    {
        $veterinary = $this->getDoctrine()
            ->getRepository('App\Entity\Veterinary')
            ->find($id);
        
        $encoders = [new XmlEncoder(), new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
       
        $serializer = new Serializer($normalizers, $encoders);
        $jsonContent = $serializer->serialize($veterinary, 'json', [
            'circular_reference_handler' => function ($object) {
                return $object->getId();
            }
        ]);
        return new Response($jsonContent);
    }

    public function new(Request $request)
    {
        $address = new Address();
        $address->setStreet($request->get('street'));
        $address->setNumber($request->get('number'));
        $address->setCity($request->get('city'));
        
        $veterinary = new Veterinary();
        $veterinary->setName($request->get('name'));
        $veterinary->setCrmv($request->get('crmv'));
        $veterinary->setAddress($address);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($veterinary);
        $entityManager->flush();
        
        return new JsonResponse(['msg' => 'Veterinary created whit success!'], Response::HTTP_OK);
    }
    
    public function edit(Request $request, $id){
        
        $veterinary = $this->getDoctrine()->getRepository('App\Entity\Veterinary')->find($id);
        $clinic = $this->getDoctrine()->getRepository('App\Entity\Clinic')->find($request->get('clinic'));
        
        if (empty($veterinary)) {
            return new JsonResponse(['msg' => 'Veterinary not found!'], Response::HTTP_NOT_FOUND);
        }
        
        $address = $veterinary->getAddress();
        $address->setStreet($request->get('street'));
        $address->setNumber($request->get('number'));
        $address->setCity($request->get('city'));
        
        $veterinary->setName($request->get('name'));
        $veterinary->setCrmv($request->get('crmv'));
        $veterinary->addClinic($clinic);
        $veterinary->setAddress($address);
        
        if (!empty($veterinary->getName())) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();

            return new JsonResponse(['msg' => 'Veterinary edited whit success!'], Response::HTTP_OK);
        }

        return new JsonResponse(['msg' => 'Check the empty fields'], Response::HTTP_NOT_ACCEPTABLE);
    }

    public function delete($id){
        $veterinary = $this->getDoctrine()->getRepository('App\Entity\Veterinary')->find($id);
        
        if (empty($veterinary)) {
            return new JsonResponse(['msg' => 'Veterinary not found!'], Response::HTTP_NOT_FOUND);
        }
        
        if (!empty($veterinary)) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($veterinary);
            $entityManager->flush();

            return new JsonResponse(['msg' => 'Veterinary deleted whit success!'], Response::HTTP_OK);
        }

        return new JsonResponse(['msg' => 'We could not find'], Response::HTTP_NOT_ACCEPTABLE);
    }
}
