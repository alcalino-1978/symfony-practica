<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Animal;
class AnimalesController extends AbstractController
{
    #[Route('/animales', name: 'app_animales')]
    public function index(EntityManagerInterface $entityManagerInterface): Response
    {
        return $this->render('animales/index.html.twig', [
            "animales" => $entityManagerInterface->getRepository(Animal::class)->findAll(),
        ]);
    }
}
