<?php

namespace App\Controller;

use App\Entity\Chantiers;
use App\Form\ChantiersFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChantierController extends AbstractController
{
    #[Route('/main/chantier', name: 'chantier')]
    public function index(): Response
    {
        $chantiers =new Chantiers();
        $form = $this->createForm(ChantiersFormType::class, $chantiers);
        return $this->renderForm('chantier/createChantier.html.twig', [
            'form' => $form,
        ]);
    }
}
