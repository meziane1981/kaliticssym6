<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChantierController extends AbstractController
{
    #[Route('/main/chantier', name: 'chantier')]
    public function index(): Response
    {
        return $this->render('chantier/index.html.twig', [
            'controller_name' => 'ChantierController',
        ]);
    }
}
