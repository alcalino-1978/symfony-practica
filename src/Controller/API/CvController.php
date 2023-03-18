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
    #[Route('/{datoPersonal}', name: 'app_cv_list')]
    public function index(EntityManagerInterface $entityManagerInterface, DatosPersonales $datoPersonal): JsonResponse
    {
        // Busca en la clase Datospersonales el primer resultado que el ID sea 1 y devuelve el objeto completo
        // $datoPersonal = $entityManagerInterface->getRepository(DatosPersonales::class)->findAll();
        //Busca informacion de la entidad Educacion y Skills y lo encuentra con el ID guardado en datosPersonales. Que está vinculado a DatoPersonal
        $educacion = $entityManagerInterface->getRepository(Education::class)->findBy([
            'datosPersonales'=>$datoPersonal
        ]);

        $skills = $entityManagerInterface->getRepository(Skills::class)->findBy([
            'datosPersonales'=>$datoPersonal
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
                    'name' => $datoPersonal->getNombre().' '.$datoPersonal->getApellidos(),
                    'phone' => $datoPersonal->getTelefono(),
                    'charge' => '',
                    'image' => '',
                    'mail' => $datoPersonal->getEmail(),
                    'linkedin' => $datoPersonal->getLinkedin(),
                    'github' => $datoPersonal->getGithub(),
                    //solicitadfos los datos de educacion y skills guardados en la variable $listaEducacion
                    
                    
                ],
                'experience'=> [],
                'skills' => $listaSkills,
                'education' => $listaEducacion,
                'languages'=> [],
            ]
        );


    }

    #[Route('/{datoPersonal}/email', name: 'app_cv_update_email', methods: ['POST'])]
    // creamos una función para modificar el valor del email
    public function changeEmail(EntityManagerInterface $entityManagerInterface, Request $request, DatosPersonales $datoPersonal): JsonResponse // pasamos como segundo parámetro los datos del request
    {
        // buscamos por un único valor que en este caso es el id
        // $datoPersonal = $entityManagerInterface->getRepository(DatosPersonales::class)->findOneBy(['id'=>2]);
        // Del response transformamos de json a un array
        $data = json_decode($request->getContent(), true);
        // seteamos el valor del email con el valor traído del response
        $datoPersonal->setEmail($data['email']);
        // avisamos que queremos guardar el dato
        $entityManagerInterface->persist($datoPersonal);
        // lo modifica en la bbdd
        $entityManagerInterface->flush();
        // devolvemos una respuesta de éxito de actualización del dato
        return new JsonResponse([], 202);
    }
}
