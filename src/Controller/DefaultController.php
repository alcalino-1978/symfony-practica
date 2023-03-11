<?php

namespace App\Controller;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Animal;
use App\Entity\Sitios;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'app_default')]
    public function index(EntityManagerInterface $entityManagerInterface): Response
    {
        return $this->render('default/index.html.twig', [
            // "animales"=>[
            //     [
            //         "nombre"=>"Gardfield",
            //         "pasos"=>2,
            //         "nacimiento"=>"2020-08-24 12:25"
            //     ],
            //     [
            //         "nombre"=>"firulais",
            //         "pasos"=>1,
            //         "nacimiento"=>"2020-08-24 12:25"
            //     ],
            // ],
            "animales" => $entityManagerInterface->getRepository(Animal::class)->findAll(),
            "sitios" => $entityManagerInterface->getRepository(Sitios::class)->findAll(),

        ]);
    }
    #[Route('/gatitos', name: 'app_gatitos')]
    public function gatitos(): Response
    {
        return new Response('Hola a todos <strong>venceremos</strong> y dominaremos el mundo!!');
    }
}
