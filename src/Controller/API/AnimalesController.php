<?php
declare(strict_types=1);

namespace App\Controller\API;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Animal;

#[Route('/api/v1/animales')]
class AnimalesController extends AbstractController {
    #[Route('/', name: 'api_v1_animales_list', methods:["GET"])]
    public function list(EntityManagerInterface $entityManagerInterface): JsonResponse
    {
        return new JsonResponse( 
            array_map(function(Animal $animal) { return [
                'animal' => $this->generateUrl('api_v1_animales_animal', ['animal' => $animal -> getId()]),
                'id' => $animal->getId(),
                'nombre' => $animal->getNombre(),
                'pasos' => $animal->getPasos(),
                'nacimiento' => $animal->getNacimiento()->format('Y-m-d H:i'),
            ]; },
            $entityManagerInterface->getRepository(Animal::class)->findAll())
        );
    }

    #[Route('/{animal}', name: 'api_v1_animales_animal', methods:["GET"])]
    public function editar(Animal $animal): JsonResponse {

        return new JsonResponse(
            [
                'id' => $animal->getId(),
                'nombre' => $animal->getNombre(),
                'pasos' => $animal->getPasos(),
                'nacimiento' => $animal->getNacimiento()->format('Y-m-d H:i'),
            ]
        );
    }

    #[Route('/', name: 'api_v1_animales_crear', methods:["POST"])]
    public function crear(EntityManagerInterface $entityManager, Request $request):JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $animal = new Animal();

        $animal->setNombre($data['name']);
        $animal->setPasos($data['steps']);
        $animal->setNacimiento(
            new \DateTimeImmutable($data['birthdate']) 
        );

        $entityManager->persist($animal);
        $entityManager->flush();

        return new JsonResponse(
            [
                'animal' => $this->generateUrl('api_v1_animales_animal', ['animal' => $animal->getId()]),
                'id' => $animal->getId(),
                'nombre' => $animal->getNombre(),
                'pasos' => $animal->getPasos(),
                'nacimiento' => $animal->getNacimiento()->format('Y-m-d H:i'),
            ]
        );
    }

}
