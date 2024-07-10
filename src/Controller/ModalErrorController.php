<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ModalErrorController extends AbstractController
{
    #[Route('/modal/error', name: 'app_modal_error')]
    public function index(): Response
    {
        return $this->render('modal_error/index.html.twig', [
            'controller_name' => 'ModalErrorController',
        ]);
    }
}
