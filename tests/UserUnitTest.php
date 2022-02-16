<?php

namespace App\Tests;

use App\Entity\User;
use App\Entity\Stock;
use PHPUnit\Framework\TestCase;

class UserUnitTest extends TestCase
{

    public function testIsTrue()
    {
        $user = new User;
        $stock = new Stock;

        $stock->setCompanyName('company')
              ->setCurrentPrice(200)
        ;

        $user->setEmail('email@gmail.com')
             ->setPassword('password')
             ->setFirstName('FirstName')
             ->setLastName('LastName')
             ->addOwnedStock($stock)
        ;

        $this->assertTrue($user->getEmail() === 'email@gmail.com');
        $this->assertTrue($user->getPassword() === 'password');
        $this->assertTrue($user->getFirstName() === 'FirstName');
        $this->assertTrue($user->getLastName() === 'LastName');
        $this->assertTrue($user->getOwnedStocks()[0] === $stock);
    }

    public function testIsFalse()
    {
        $user = new User;
        $stock = new Stock;

        $stock->setCompanyName('company')
              ->setCurrentPrice(200)
        ;

        $user->setEmail('email@gmail.com')
             ->setPassword('password')
             ->setFirstName('FirstName')
             ->setLastName('LastName')
             ->addOwnedStock($stock)
        ;

        $this->assertFalse($user->getEmail() === 'false');
        $this->assertFalse($user->getPassword() === 'false');
        $this->assertFalse($user->getFirstName() === 'false');
        $this->assertFalse($user->getLastName() === 'false');
        $this->assertFalse($user->getOwnedStocks()[0] === 'false');
    }
}