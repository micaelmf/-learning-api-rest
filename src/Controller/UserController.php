<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Address;
use App\Form\AddressType;
use App\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class UserController extends AbstractController
{
    public function index()
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    public function new(Request $request)
    {
        $user = new User();

        $form = $this->createForm(UserType::class, $user)
            ->add('save', SubmitType::class, ['label' => 'Confirm']);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $user = $form->getData();
            
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('user_edit', [
                'id' => $user->getId()
            ]);
        }
        
        return $this->render('user/new-user.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    public function list()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $query = $entityManager->createQuery(
            '
            SELECT user FROM App\Entity\User user'
        );
        $users = $query->getResult();

        return $this->render('user/list-user.html.twig', [
            'users' => $users,
        ]);
    }

    public function edit(Request $request, $user)
    {
        $form = $this->createForm(UserType::class, $user)
            ->add('save', SubmitType::class, ['label' => 'Confirm']);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $user = $form->getData();
            
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();

            return $this->redirectToRoute('user_edit', [
                'id' => $user->getId()
            ]);
        }
        
        return $this->render('user/new-user.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    public function remove(Request $request, User $user)
    {
        $entityManager = $this->getDoctrine('App\Entity\User')->getManager();
        $entityManager->remove($user);
        $entityManager->flush();
        
        return $this->render('user/remove-user.html.twig', [
            'user' => $user,
        ]);
    }
}
