<?php
declare(strict_types=1);

namespace App\Controller\API;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Animal;

#[Route('/api/v1/animales')]
class AnimalesController extends AbstractController {

    private function objectInfo (Animal $animal) {
        return [
            'animal' => $this->generateUrl('api_v1_animales_animal', ['animal' => $animal -> getId()]),
            'id' => $animal->getId(),
            'nombre' => $animal->getNombre(),
            'pasos' => $animal->getPasos(),
            'nacimiento' => $animal->getNacimiento()?->format('Y-m-d H:i'),
        ];
    }

    #[Route('/', name: 'api_v1_animales_list', methods:["GET"])]
    public function list(EntityManagerInterface $entityManagerInterface): JsonResponse
    {
        return new JsonResponse( 
            array_map(fn(Animal $animal) => $this->objectInfo($animal),
            $entityManagerInterface->getRepository(Animal::class)->findAll())
        );
    }

    #[Route('/{animal}', name: 'api_v1_animales_animal', methods:["GET"])]
    public function detalle(Animal $animal): JsonResponse {

        return new JsonResponse(
            $this->objectInfo($animal)
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
            $this->objectInfo($animal), Response::HTTP_CREATED
        );
    }

    #[Route('/{animal}', name: 'api_v1_animales_editar', methods:["PATCH"])]
    public function editar(EntityManagerInterface $entityManager, Request $request, Animal $animal):JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        if (!empty($data['name'])) {
            $animal->setNombre($data['name']);
        }

        if (!empty($data['steps'])) {
            $animal->setPasos($data['steps']);
        }

        if (!empty($data['birthdate'])) {
            $animal->setNacimiento(
                new \DateTimeImmutable($data['birthdate']) 
            );
        }

        $entityManager->persist($animal);
        $entityManager->flush();

        return new JsonResponse(
            $this->objectInfo($animal), Response::HTTP_ACCEPTED
        );
    }

    #[Route('/{animal}', name: 'api_v1_animales_eliminar', methods:["DELETE"])]
    public function borrar(EntityManagerInterface $entityManager, Animal $animal):JsonResponse
    {
        $entityManager->remove($animal);
        $entityManager->flush();

        return new JsonResponse(
            [], Response::HTTP_NO_CONTENT
        );
    }

}
