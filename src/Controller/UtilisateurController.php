<?php

namespace App\Controller;

use App\Entity\Utilisateurs;
use App\Form\UtilisateursFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UtilisateurController extends AbstractController
{
    #[Route('/main/utilisateur', name: 'utilisateur')]
    public function index(): Response
    {
        $utilisateurs = new Utilisateurs;
        $form = $this->createForm(UtilisateursFormType::class, $utilisateurs);
        return $this->renderForm('utilisateur/createUtilisateurs.html.twig', [
            'form' => $form,
        ]);
    }
}

