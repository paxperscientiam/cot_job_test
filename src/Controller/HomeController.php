<?php

namespace App\Controller;

use App\Repository\TicketProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home', methods: ['GET'])]
    public function index(TicketProductRepository $ticketProductRepository): Response
    {
        $tickets = $ticketProductRepository->findAll();

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'tickets' => $tickets,
        ]);
    }
}
