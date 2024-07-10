<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ToggleFavoriteController extends AbstractController
{
    #[Route('/toggle/favorite', name: 'app_toggle_favorite')]
    public function index(): Response
    {
        return $this->render('toggle_favorite/index.html.twig', [
            'controller_name' => 'ToggleFavoriteController',
        ]);
    }
}
