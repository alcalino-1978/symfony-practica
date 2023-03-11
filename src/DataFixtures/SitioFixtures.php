<?php

namespace App\DataFixtures;

use App\Entity\Sitios;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class SitioFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $sitio1= new Sitios();
        $sitio1->setNombre('La caleta');
        $manager->persist($sitio1);

        $sitio2= new Sitios();
        $sitio2->setNombre('Gandía');
        $manager->persist($sitio2);

        $sitio3= new Sitios();
        $sitio3->setNombre('El Sardinero');
        $manager->persist($sitio3);

        $manager->flush();

    }
}
