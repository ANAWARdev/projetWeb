<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChoixdefiController extends AbstractController
{
    #[Route('/choixdefi', name: 'app_choixdefi')]
    public function index(): Response
    {
        return $this->render('choixdefi/index.html.twig', [
            'controller_name' => 'ChoixdefiController',
        ]);
    }
}
