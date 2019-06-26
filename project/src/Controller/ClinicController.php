<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ClinicController extends AbstractController
{
    /**
     * @Route("/clinic", name="clinic")
     */
    public function index()
    {
        return $this->render('clinic/index.html.twig', [
            'controller_name' => 'ClinicController',
        ]);
    }
}
