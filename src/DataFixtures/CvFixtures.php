<?php

namespace App\DataFixtures;

use App\Entity\DatosPersonales;
use App\Entity\Education;
use App\Entity\Skills;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CvFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $datosPersonales = new DatosPersonales();
        $datosPersonales->setNombre('Pepito');
        $datosPersonales->setApellidos('Palote');
        // $datosPersonales->setImagen('John');
        $datosPersonales->setEmail('example@example.com');
        $datosPersonales->setTelefono('666777');
        $datosPersonales->setGithub('https://example.com');
        $datosPersonales->setLinkedin('https://example.com');

        $manager->persist($datosPersonales);

        $educacion1 = new Education();
        $educacion1->setFinalizacion(2016);
        $educacion1->setNombre('Bachelor Honors Degreee');
        $educacion1->setCentro('Universidad Complutense de M');
        $educacion1->setDescripcion('Estudios Universitarios en Lenguaje PHP');
        $educacion1->setDatosPersonales($datosPersonales);
        $manager->persist($educacion1);

        $educacion2 = new Education();
        $educacion2->setFinalizacion(2023);
        $educacion2->setNombre('Full Stack Developer');
        $educacion2->setCentro('Upgrade Hub');
        $educacion2->setDescripcion('Bootcamp Fullstack');
        $educacion2->setDatosPersonales($datosPersonales);
        $manager->persist($educacion2);

        $skills1 = new Skills();
        $skills1->setHard(
            //Creamos a mano una cadena Json
            '[
                "HTTP", "Javascript", "PHP", "Angular", "React", "Adobe"
            ]'
        );
        $skills1->setSoft(
            //Pasamos un array a un dato que estaba por defecto como String. Y en la entidad se ha modificado la función setSoft
            ['Soy amable', 'trabajo en equipo', 'digo gracias']
        );
        $skills1->setDatosPersonales($datosPersonales);
        $manager->persist($skills1);

        $manager->flush();
    }
}
