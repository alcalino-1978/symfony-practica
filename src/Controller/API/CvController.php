<?php

namespace App\Controller\API;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Doctrine\ORM\EntityManagerInterface;
use App\Entity\DatosPersonales;

#[Route('/api/v1/cv')]
class CvController extends AbstractController
{
    #[Route('/', name: 'app_cv_list')]
    public function index(EntityManagerInterface $entityManagerInterface): JsonResponse
    {
        $datoPersonal = $entityManagerInterface->getRepository(DatosPersonales::class)->findOneBy([
            "id"=>1
        ]);
        return new JsonResponse(
            [
                'nombre' => $datoPersonal->getNombre(),
            ]
        );
    }
}
