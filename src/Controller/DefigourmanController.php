<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefigourmanController extends AbstractController
{
    #[Route('/defigourman', name: 'app_defigourman')]
    public function index(): Response
    {
        return $this->render('defigourman/index.html.twig', [
            'controller_name' => 'DefigourmanController',
        ]);
    }
}
