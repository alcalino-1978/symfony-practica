<?php

namespace App\DataFixtures;

use App\Entity\DatosPersonales;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CvFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $datosPersonales = new DatosPersonales();
        $datosPersonales->setNombre('John');
        $datosPersonales->setApellidos('Doe');
        // $datosPersonales->setImagen('John');
        $datosPersonales->setEmail('example@example.com');
        $datosPersonales->setTelefono('666777');
        $datosPersonales->setGithub('https://example.com');
        $datosPersonales->setLinkedin('https://example.com');

        $manager->persist($datosPersonales);

        
        $manager->flush();
    }
}
