<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefizenController extends AbstractController
{
    #[Route('/defizen', name: 'app_defizen')]
    public function index(): Response
    {
        return $this->render('defizen/index.html.twig', [
            'controller_name' => 'DefizenController',
        ]);
    }
}
