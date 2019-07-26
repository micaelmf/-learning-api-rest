<?php

namespace App\Controller;

use App\Entity\Teste;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class TesteController extends AbstractController
{
    /**
     * @Route("/testeee", name="testee")
     */
    public function index()
    {
        return $this->render('testee/index.html.twig', [
            'controller_name' => 'TesteController',
        ]);
    }

    public function new(Request $request)
    {
        // creates a teste and gives it some dummy data for this example
        $teste = new Teste();
        $teste->setName('micaelmf');
        
        $form = $this->createFormBuilder($teste)
            ->add('name', TextType::class, ['label' => 'name teste'])
            ->add('save', SubmitType::class, ['label' => 'Confirm'])
            ->getForm();
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $teste = $form->getData();
            
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($teste);
            $entityManager->flush();

            return $this->redirectToRoute('app_teste_new');
        }
        
        return $this->render('teste/new-teste.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
