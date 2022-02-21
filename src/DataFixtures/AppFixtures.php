<?php

namespace App\DataFixtures;

use App\Entity\Stock;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $stocksArray = [
            'Apple',
            'Tesla',
            'Microsoft',
            'SoftBank',
            'Meta',
            'Google'
        ];

        foreach($stocksArray as $stock) {
            $stockObject = new Stock;
            $stockObject->setCompanyName($stock)
                        ->setCurrentPrice(10)
            ;
            $manager->persist($stockObject);
        }

        $manager->flush();
    }
}
