<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SitiosController extends AbstractController
{
    #[Route('/sitios', name: 'app_sitios')]
    public function index(): Response
    {
        return $this->render('sitios/index.html.twig', [
            'controller_name' => 'SitiosController',
        ]);
    }
}
