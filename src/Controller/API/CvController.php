<?php

namespace App\Controller\API;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Doctrine\ORM\EntityManagerInterface;
use App\Entity\DatosPersonales;
use App\Entity\Education;
use App\Entity\Skills;
use App\Repository\EducationRepository;

#[Route('/api/v1/cv')]
class CvController extends AbstractController
{
    #[Route('', name: 'app_cv_list')]
    public function index(EntityManagerInterface $entityManagerInterface): JsonResponse
    {
        // Busca en la clase Datospersonales el primer resultado que el ID sea 1 y devuelve el objeto completo
        $datoPersonal = $entityManagerInterface->getRepository(DatosPersonales::class)->findAll();
        //Busca informacion de la entidad Educacion y Skills y lo encuentra con el ID guardado en datosPersonales. Que está vinculado a DatoPersonal
        $educacion = $entityManagerInterface->getRepository(Education::class)->findBy([
            'datosPersonales'=>$datoPersonal[0]
        ]);

        $skills = $entityManagerInterface->getRepository(Skills::class)->findBy([
            'datosPersonales'=>$datoPersonal[0]
        ]);

        //Variable donde guardamos los estudios y skills
        $listaEducacion = [];
        $listaSkills = [];

        //Bucle que itera en los datos obtenidos con la variable $educacion y $skills y guarda los datos en la variable $listaEducacion $listaSkills
        foreach($educacion as $fila) {
            $listaEducacion[] = [
                'nombre' => $fila->getNombre(),
                'centro' => $fila->getCentro(),
                'finalizacion' => $fila->getFinalizacion(),
            ];
        }
        foreach($skills as $fila) {
            $listaSkills[] = [
                //decodificamos el json utilizando la función json_decode()
                'hard' => json_decode($fila->getHard()),
                'soft' => json_decode($fila->getSoft()),
            ];
        }

        return new JsonResponse(
            [   
                'personalInfo'=> [
                    'name' => $datoPersonal[0]->getNombre().' '.$datoPersonal[0]->getApellidos(),
                    'phone' => $datoPersonal[0]->getTelefono(),
                    'charge' => '',
                    'image' => '',
                    'mail' => $datoPersonal[0]->getEmail(),
                    'linkedin' => $datoPersonal[0]->getLinkedin(),
                    'github' => $datoPersonal[0]->getGithub(),
                    //solicitadfos los datos de educacion y skills guardados en la variable $listaEducacion
                    
                    
                ],
                'experience'=> [],
                'skills' => $listaSkills,
                'education' => $listaEducacion,
                'languages'=> [],
            ]
        );


    }
}
