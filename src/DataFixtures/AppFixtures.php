<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        for($i=0;$i<10;$i++){
        $categorie = new Category;
        
        $categorie->setName('Catégorie '.($i+1));
        //     $task->setIsDone(false);
        //     $task->setCreatedAt(new DateTimeImmutable());

          $manager->persist($categorie); 
        }

        $manager->flush();
    }
}
