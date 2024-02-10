<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefifunController extends AbstractController
{
    #[Route('/defifun', name: 'app_defifun')]
    public function index(): Response
    {
        return $this->render('defifun/index.html.twig', [
            'controller_name' => 'DefifunController',
        ]);
    }
}
