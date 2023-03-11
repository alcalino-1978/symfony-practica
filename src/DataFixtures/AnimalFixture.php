<?php

namespace App\DataFixtures;

use App\Entity\Animal;
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
        $manager->persist($animal1);

        $animal2= new Animal();
        $animal2->setNombre('Megalodon');
        $animal2->setPasos(30);
        $manager->persist($animal2);

        $animal3= new Animal();
        $animal3->setNombre('Pez Martillo');
        $animal3->setPasos(5);
        $manager->persist($animal3);
        
        $manager->flush();

    }
}
