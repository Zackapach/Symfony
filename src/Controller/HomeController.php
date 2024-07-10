<?php

namespace App\Controller;

use App\Repository\ListingRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(ListingRepository $listingRepository): Response
    {
        $listings = $listingRepository->findAll();

        // include __DIR__ . '/../../templates/home/partials/listings.php';
        // dd($listings);
        return $this->render('home/index.html.twig', [
            'listings' => $listings,
        ]);
    }
}
