<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
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

    #[Route('/animales/borrar/{animal}', name: 'app_animales_borrar')]
    public function borrar(EntityManagerInterface $entityManager, Animal $animal):Response
    {
        $entityManager->remove($animal);
        $entityManager->flush();

        return new RedirectResponse(
            $this->generateUrl('app_animales')
        );
    }
}
