<?php

namespace App\Controller;

use App\Entity\Pet;
use App\Entity\User;
use App\Form\PetType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\Response;

class ApiPetController extends AbstractController
{
    public function list()
    {
        $pets = $this->getDoctrine()->getRepository('App\Entity\Pet')
            ->findAll();
        
        $encoders = [new XmlEncoder(), new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
       
        $serializer = new Serializer($normalizers, $encoders);
        $jsonContent = $serializer->serialize($pets, 'json', [
            'ignored_attributes' => ['owner' => 'address']
        ]);

        return new Response($jsonContent);
    }

    public function show(Pet $id)
    {
        $pet = $this->getDoctrine()->getRepository('App\Entity\Pet')
            ->find($id);
        
        $encoders = [new XmlEncoder(), new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
       
        $serializer = new Serializer($normalizers, $encoders);
        $jsonContent = $serializer->serialize($pet, 'json', [
            'ignored_attributes' => ['owner' => 'address']
        ]);
        
        return new Response($jsonContent);
    }

    public function new(Request $request)
    {
        $owner = $this->getDoctrine()->getRepository('App\Entity\User')
            ->find($request->get('owner'));
        
        $pet = new Pet();
        $pet->setName($request->get('name'));
        $pet->setDateBirth($request->get('dateBirth'));
        $pet->setWeigth($request->get('weigth'));
        $pet->setType($request->get('type'));
        $pet->setBreed($request->get('breed'));
        $pet->setOwner($owner);
        
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($pet);
        $entityManager->flush();
        
        return new JsonResponse(['msg' => 'Pet created whit success!'], Response::HTTP_CREATED);
    }
    
    public function edit(Request $request, $id)
    {
        $pet = $this->getDoctrine()->getRepository('App\Entity\Pet')
            ->find($id);
        $owner = $this->getDoctrine()->getRepository('App\Entity\User')
            ->find($request->get('owner'));
        
        if (empty($pet)) {
            return new JsonResponse(['msg' => 'Pet not found!'], Response::HTTP_NOT_FOUND);
        }
        
        $pet->setName($request->get('name'));
        $pet->setDateBirth($request->get('dateBirth'));
        $pet->setWeigth($request->get('weigth'));
        $pet->setType($request->get('type'));
        $pet->setBreed($request->get('breed'));
        $pet->setOwner($owner);

        if (!empty($pet->getPetName())) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();

            return new JsonResponse(['msg' => 'Pet edited whit success!'], Response::HTTP_OK);
        }

        return new JsonResponse(['msg' => 'Check the empty fields'], Response::HTTP_BAD_REQUEST);
    }

    public function delete($id)
    {
        $pet = $this->getDoctrine()->getRepository('App\Entity\Pet')
            ->find($id);
        
        if (empty($pet)) {
            return new JsonResponse(['msg' => 'Pet not found!'], Response::HTTP_NOT_FOUND);
        }
        
        if (!empty($pet)) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($pet);
            $entityManager->flush();

            return new JsonResponse(['msg' => 'Pet deleted whit success!'], Response::HTTP_OK);
        }

        return new JsonResponse(['msg' => 'We could not find'], Response::HTTP_BAD_REQUEST);
    }
}
