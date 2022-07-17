<?php

namespace App\Controller;

use App\Entity\Pointages;
use App\Form\PointagesFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PointageController extends AbstractController
{
    #[Route('/main/pointage', name: 'pointage')]
    public function index(): Response
    {
        $pointages =new Pointages();
        $form = $this->createForm(PointagesFormType::class, $pointages); 
        return $this->renderForm('pointage/createPointage.html.twig', [
            'form' => $form,
        ]);
    }
}


