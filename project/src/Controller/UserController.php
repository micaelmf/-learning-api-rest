<?php
// src/Controller/UserController.php
namespace App\Controller;

use App\Entity\User;
use App\Entity\Address;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class UserController extends AbstractController
{
    public function new(Request $request)
    {
        // creates a user and gives it some dummy data for this example
        $user = new User();
        $user->setUserName('micaelmf');
        $user->setEmail('micaelmf@gmail.com');
        
        $form = $this->createFormBuilder($user)
            ->add('userName', TextType::class, ['label' => 'User name'])
            ->add('email', TextType::class, ['label' => 'E-mail'])
            ->add('street', TextType::class, ['label' => 'Street'])
            ->add('number', TextType::class, ['label' => 'Number'])
            ->add('city', TextType::class, ['label' => 'City'])
            ->add('save', SubmitType::class, ['label' => 'Confirm'])
            ->getForm();
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {

            
            $user = $form->getData();
            
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('task_success');
        }
        
        return $this->render('user/new-user.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}