<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ModalSuccessController extends AbstractController
{
    #[Route('/modal/success', name: 'app_modal_success')]
    public function index(): Response
    {
        return $this->render('modal_success/index.html.twig', [
            'controller_name' => 'ModalSuccessController',
        ]);
    }
}
