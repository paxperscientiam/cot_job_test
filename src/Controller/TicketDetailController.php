<?php

namespace App\Controller;

use App\Entity\TicketProduct;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TicketDetailController extends AbstractController
{
    #[Route('/ticket/detail/{id}', name: 'app_ticket_detail', methods: ['GET'])]
    public function show(TicketProduct $product): Response
    {
        return $this->render('ticket_detail/index.html.twig', [
            'product' => $product,
        ]);
    }
}
