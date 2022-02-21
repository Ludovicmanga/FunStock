<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Entity\Stock;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }
    
    public function load(ObjectManager $manager): void
    {
        $usersArray = [
            [
                'FirstName' => 'John',
                'LastName' => 'John',
                'Email'=> 'John@gmail.com'
            ],
            [
                'FirstName' => 'Paul',
                'LastName' => 'Newton',
                'Email'=> 'Paul@gmail.com'
            ],
            [
                'FirstName' => 'Georges',
                'LastName' => 'Smith',
                'Email'=> 'Georges@gmail.com'
            ],
        ];

        foreach($usersArray as $userArray){
            $user = new User;
            foreach($userArray as $key => $value) {
                $setter = 'set'.$key;
                $user->$setter($value);
            }
            $user->setPassword($this->passwordHasher->hashPassword($user, 2707));
            $manager->persist($user);
        }

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
