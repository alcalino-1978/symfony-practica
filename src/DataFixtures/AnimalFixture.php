<?php

namespace App\DataFixtures;

use App\Entity\Animal;
use DateTimeImmutable;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AnimalFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $animal1= new Animal();
        $animal1->setNombre('Tiburón Blanco');
        $animal1->setPasos(10);
        $animal1->setNacimiento(
            new DateTimeImmutable("2022-05-21 12:34") 
        );
        $manager->persist($animal1);

        $animal2= new Animal();
        $animal2->setNombre('Megalodon');
        $animal2->setPasos(30);
        $animal2->setNacimiento(
            new DateTimeImmutable("2023-06-12 15:33") 
        );
        $manager->persist($animal2);

        $animal3= new Animal();
        $animal3->setNombre('Pez Martillo');
        $animal3->setPasos(5);
        $animal3->setNacimiento(
            new DateTimeImmutable("2021-02-26 15:11") 
        );
        $manager->persist($animal3);
        
        $manager->flush();

    }
}
