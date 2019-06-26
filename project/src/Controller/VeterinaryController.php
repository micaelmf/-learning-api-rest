<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class VeterinaryController extends AbstractController
{
    /**
     * @Route("/veterinary", name="veterinary")
     */
    public function index()
    {
        return $this->render('veterinary/index.html.twig', [
            'controller_name' => 'VeterinaryController',
        ]);
    }
}
