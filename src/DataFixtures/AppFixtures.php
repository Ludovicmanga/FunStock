<?php

namespace App\DataFixtures;

use DateTime;
use App\Entity\User;
use App\Entity\Stock;
use App\Entity\Battle;
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

        // users

        $georges = new User();
        $georges->setFirstName('Georges')
                ->setLastName('Smith')
                ->setEmail('georges@gmail.com')
                ->setPicture('https://funstock.s3.eu-west-3.amazonaws.com/georges.jpg')
                ->setPassword($this->passwordHasher->hashPassword($georges, 'password'))
        ;
        $manager->persist($georges);

        $paul = new User();
        $paul->setFirstName('Paul')
                ->setLastName('Smith')
                ->setEmail('paul@gmail.com')
                ->setPicture('https://funstock.s3.eu-west-3.amazonaws.com/paul.jpg')
                ->setPassword($this->passwordHasher->hashPassword($paul, 'password'))
        ;
        $manager->persist($paul);

        $john = new User();
        $john->setFirstName('John')
                ->setLastName('Doe')
                ->setEmail('john@gmail.com')
                ->setPicture('https://funstock.s3.eu-west-3.amazonaws.com/john.jpg')
                ->setPassword($this->passwordHasher->hashPassword($john, 'password'))
        ;
        $manager->persist($john);

        // battles

        $stock1 = new Stock;
        $stock1->setCompanyName('Airbus')
               ->setSymbol('AIR')
               ->setCurrentPrice(107.22)
               ->setLogo('https://funstock.s3.eu-west-3.amazonaws.com/airbus_logo.png')
               ->setType('company')
               ->setLast30DaysEvolution('+7')
        ;
        $manager->persist($stock1);

        $battle1 = new Battle;
        $battle1->setAttacker($georges)
                ->setDefender($john)
                ->setWinner($georges)
                ->setLoser($john)
                ->setStock($stock1)
                ->setState('accepted')
                ->setBattleDate(new datetime)
                ->setAmount(1000)
                ->setStockVariationDirectionPrediction('up')
        ;
        $manager->persist($battle1);

        $battle2 = new Battle;
        $battle2->setAttacker($georges)
                ->setDefender($john)
                ->setWinner($georges)
                ->setLoser($john)
                ->setStock($stock1)
                ->setState('accepted')
                ->setBattleDate(new datetime)
                ->setAmount(1000)
                ->setStockVariationDirectionPrediction('up')
        ;
        $manager->persist($battle2);

        $battle3 = new Battle;
        $battle3->setAttacker($georges)
                ->setDefender($john)
                ->setWinner($georges)
                ->setLoser($john)
                ->setStock($stock1)
                ->setState('accepted')
                ->setBattleDate(new datetime)
                ->setAmount(1000)
                ->setStockVariationDirectionPrediction('up')
        ;
        $manager->persist($battle3);

        $battle4 = new Battle;
        $battle4->setAttacker($georges)
                ->setDefender($john)
                ->setWinner($georges)
                ->setLoser($john)
                ->setStock($stock1)
                ->setState('accepted')
                ->setBattleDate(new datetime)
                ->setAmount(1000)
                ->setStockVariationDirectionPrediction('up')
        ;
        $manager->persist($battle4);

        $battle5 = new Battle;
        $battle5->setAttacker($georges)
                ->setDefender($john)
                ->setWinner($john)
                ->setLoser($georges)
                ->setStock($stock1)
                ->setState('accepted')
                ->setBattleDate(new datetime)
                ->setAmount(1000)
                ->setStockVariationDirectionPrediction('up')
        ;
        $manager->persist($battle5);

        $battle6 = new Battle;
        $battle6->setAttacker($georges)
                ->setDefender($paul)
                ->setWinner($paul)
                ->setLoser($georges)
                ->setStock($stock1)
                ->setState('accepted')
                ->setBattleDate(new datetime)
                ->setAmount(1000)
                ->setStockVariationDirectionPrediction('up')
        ;
        $manager->persist($battle6);

        $battle7= new Battle;
        $battle7->setAttacker($john)
                ->setDefender($paul)
                ->setWinner($paul)
                ->setLoser($john)
                ->setStock($stock1)
                ->setState('accepted')
                ->setBattleDate(new datetime)
                ->setAmount(1000)
                ->setStockVariationDirectionPrediction('up')
        ;
        $manager->persist($battle7);

        $battle8 = new Battle;
        $battle8->setAttacker($georges)
                ->setDefender($paul)
                ->setWinner($georges)
                ->setLoser($paul)
                ->setStock($stock1)
                ->setState('accepted')
                ->setBattleDate(new datetime)
                ->setAmount(1000)
                ->setStockVariationDirectionPrediction('up')
        ;
        $manager->persist($battle8);

        $battle9 = new Battle;
        $battle9->setAttacker($john)
                ->setDefender($paul)
                ->setWinner($john)
                ->setLoser($paul)
                ->setStock($stock1)
                ->setState('accepted')
                ->setBattleDate(new datetime)
                ->setAmount(1000)
                ->setStockVariationDirectionPrediction('up')
        ;
        $manager->persist($battle9);

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
