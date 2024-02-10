<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NouveaudefiController extends AbstractController
{
    #[Route('/nouveaudefi', name: 'app_nouveaudefi')]
    public function index(): Response
    {
        return $this->render('nouveaudefi/index.html.twig', [
            'controller_name' => 'NouveaudefiController',
        ]);
    }
}
