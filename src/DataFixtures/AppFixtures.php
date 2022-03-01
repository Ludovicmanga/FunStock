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
                'Email'=> 'John@gmail.com',
                'Picture' => 'https://funstock.s3.eu-west-3.amazonaws.com/john.jpg'
            ],
            [
                'FirstName' => 'Paul',
                'LastName' => 'Newton',
                'Email'=> 'paul@gmail.com',
                'Picture' => 'https://funstock.s3.eu-west-3.amazonaws.com/paul.jpg'
            ],
            [
                'FirstName' => 'Georges',
                'LastName' => 'Smith',
                'Email'=> 'Georges@gmail.com',
                'Picture' => 'https://funstock.s3.eu-west-3.amazonaws.com/georges.jpg'
            ],
        ];

        foreach($usersArray as $userArray){
            $user = new User;
            foreach($userArray as $key => $value) {
                $setter = 'set'.$key;
                $user->$setter($value);
            }
            $user->setPassword($this->passwordHasher->hashPassword($user, 'password'));
            $manager->persist($user);
        }

        $stockArrayList = [
            [
                'name' => 'Apple',
                'symbol'=> 'AAPL',
                'current_price' => 160,07,
                'logo' => 'https://funstock.s3.eu-west-3.amazonaws.com/apple_logo.png',
                'type' => 'company',
                'last 30 days evolution' => '+6'
            ],
            [
                'name' => 'Bitcoin',
                'symbol'=> 'BTC',
                'current_price' => 31586.31,
                'logo' => 'https://funstock.s3.eu-west-3.amazonaws.com/bitcoin_logo.png',
                'type' => 'crypto',
                'last 30 days evolution' => '+5'
            ],
            [
                'name' => 'Ethereum',
                'symbol'=> 'ETH',
                'current_price' => 2126.91,
                'logo' => 'https://funstock.s3.eu-west-3.amazonaws.com/ethereum_logo.png',
                'type' => 'crypto',
                'last 30 days evolution' => '-9'
            ],
            [
                'name' => 'Litecoin',
                'symbol'=> 'LIT',
                'current_price' => 83.72,
                'logo' => 'https://funstock.s3.eu-west-3.amazonaws.com/litecoin_logo.png',
                'type' => 'crypto',
                'last 30 days evolution' => '+19'
            ],
            [
                'name' => 'Microsoft',
                'symbol'=> 'MSFT',
                'current_price' => 280.27,
                'logo' => 'https://funstock.s3.eu-west-3.amazonaws.com/microsoft_logo.png',
                'type' => 'company',
                'last 30 days evolution' => '-3'
            ],
            [
                'name' => 'Airbus',
                'symbol'=> 'AIR',
                'current_price' => 107.22,
                'logo' => 'https://funstock.s3.eu-west-3.amazonaws.com/airbus_logo.png',
                'type' => 'company',
                'last 30 days evolution' => '+7'
            ],
            [
                'name' => 'Palantir',
                'symbol'=> 'PLTR',
                'current_price' => 10.43,
                'logo' => 'https://funstock.s3.eu-west-3.amazonaws.com/palantir_logo.png',
                'type' => 'company',
                'last 30 days evolution' => '-11'
            ],
            [
                'name' => 'TSMC',
                'symbol'=> 'TWD',
                'current_price' => 604,
                'logo' => 'https://funstock.s3.eu-west-3.amazonaws.com/tsmc_logo.png',
                'type' => 'company',
                'last 30 days evolution' => '+29'
            ],
        ];

        foreach($stockArrayList as $stockArray){
            $stockObject = new Stock;
            $stockObject->setCompanyName($stockArray['name'])
                        ->setCurrentPrice($stockArray['current_price'])
                        ->setSymbol($stockArray['symbol'])
                        ->setLogo($stockArray['logo'])
                        ->setType($stockArray['type'])
                        ->setLast30DaysEvolution($stockArray['last 30 days evolution'])
            ;

            $manager->persist($stockObject);
        }
        $manager->flush();
    }
}
