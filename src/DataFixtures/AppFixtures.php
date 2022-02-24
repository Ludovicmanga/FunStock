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

        $stockArrayList = [
            [
                'name' => 'Apple',
                'symbol'=> 'AAPL',
                'current_price' => 160,07,
                'logo' => 'uploads/logo/apple_logo.png',
                'type' => 'company'
            ],
            [
                'name' => 'Bitcoin',
                'symbol'=> 'BTC',
                'current_price' => 31586.31,
                'logo' => 'uploads/logo/bitcoin_logo.png',
                'type' => 'crypto'
            ],
            [
                'name' => 'Ethereum',
                'symbol'=> 'ETH',
                'current_price' => 2126.91,
                'logo' => 'uploads/logo/ethereum_logo.png',
                'type' => 'crypto'
            ],
            [
                'name' => 'Litecoin',
                'symbol'=> 'LIT',
                'current_price' => 83.72,
                'logo' => 'uploads/logo/litecoin_logo.png',
                'type' => 'crypto'
            ],
            [
                'name' => 'Microsoft',
                'symbol'=> 'MSFT',
                'current_price' => 280.27,
                'logo' => 'uploads/logo/microsoft_logo.png',
                'type' => 'company'
            ],
            [
                'name' => 'Airbus',
                'symbol'=> 'Air',
                'current_price' => 107.22,
                'logo' => 'uploads/logo/airbus_logo.png',
                'type' => 'company'
            ],
            [
                'name' => 'Palantir',
                'symbol'=> 'PLTR',
                'current_price' => 10.43,
                'logo' => 'uploads/logo/palantir_logo.png',
                'type' => 'company'
            ],
            [
                'name' => 'TSMC',
                'symbol'=> 'ETH',
                'current_price' => 604,
                'logo' => 'uploads/logo/tsmc_logo.png',
                'type' => 'company'
            ],
        ];

        foreach($stockArrayList as $stockArray){
            $stockObject = new Stock;
            $stockObject->setCompanyName($stockArray['name'])
                        ->setCurrentPrice($stockArray['current_price'])
                        ->setSymbol($stockArray['symbol'])
                        ->setLogo($stockArray['logo'])
                        ->setType($stockArray['type'])
            ;

            $manager->persist($stockObject);
        }
        $manager->flush();
    }
}
