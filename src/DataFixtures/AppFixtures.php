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

        $encodedStockListFromAPI = file_get_contents('https://financialmodelingprep.com/api/v3/stock/list?apikey=8a6cb36615e4103bc91599f35b90884e');

        $decodedStockList = json_decode($encodedStockListFromAPI,true);

        foreach($decodedStockList as $stockFromApi){
            $stockObject = new Stock;
            $stockObject->setCompanyName($stockFromApi['name'])
                        ->setCurrentPrice($stockFromApi['price'])
                        ->setSymbol($stockFromApi['symbol'])
            ;

            $manager->persist($stockObject);
        }
        $manager->flush();
    }
}
