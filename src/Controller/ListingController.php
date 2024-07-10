<?php

namespace App\Controller;

use App\Repository\ListingRepository;
use App\Entity\Listing;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/listing', name: 'app_listing_')]
class ListingController extends AbstractController
{
    #[Route('/new', name: 'new')]
    public function new(EntityManagerInterface $entityManager): Response
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $title = $_POST['title'];
            $price = $_POST['price'];
            $location = $_POST['location'];
            $description = $_POST['description'];

            $listing = new Listing();
            $listing->setTitle($title);
            $listing->setTitle($price);
            $listing->setTitle($description);
            $listing->setTitle($location);
            $listing->setTitle($title);
            $listing
                ->setIsFavorite(isFavorite:false)
                ->setCreatedAt(new \DateTimeImmutable());
                // ->setUpdatedAt(new \DateTimeImmutable());

            $entityManager->persist($listing);
            $entityManager->flush();

            return $this->redirectToRoute('app_home');
        }

         

        // include __DIR__ . '/../../templates/home/partials/listings.php';
        return $this->render('listing/new.html.twig', [
            
        ]);
    }
}
