<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

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

    #[Route('/animales/editar/{animal}', name: 'app_animales_editar')]
    public function editar(EntityManagerInterface $entityManager, Animal $animal):Response
    {
        return $this->render('animales/edicion.html.twig', [
            "animal" => $animal
        ]);
    }

    #[Route('/animales/guardar/{animal}', name: 'app_animales_guardar', methods:["POST"])]
    public function guardar(EntityManagerInterface $entityManager, Request $request, Animal $animal):Response
    {
        //$request->request->has
        $animal->setPasos($request->request->getInt("steps",0));
        $animal->setNombre($request->request->get("name", "Nombre Random"));
        //$animal->setNacimiento($request->request->get("birthdate", ""));
        $animal->setNacimiento(
            new \DateTimeImmutable($request->request->get("birthdate", "")) 
        );

        $entityManager->persist($animal);
        $entityManager->flush();

        return new RedirectResponse(
            $this->generateUrl('app_animales')
        );


    }
}
