<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Product;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
         $product = new Product;
         $product ->setName("Sepatu Kece");
         $product ->setDescription("This Shoes is very good");
         $product ->setSize(36);
         
         $manager->persist($product);

         $product = new Product;
         $product ->setName("Sepatu Sport");
         $product ->setDescription("This Sport Shoes is very good");
         $product ->setSize(40);
         
         $manager ->persist($product);
         
        $manager->flush();
    }
}
