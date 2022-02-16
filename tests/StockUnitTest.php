<?php

namespace App\Tests;

use App\Entity\User;
use App\Entity\Stock;
use PHPUnit\Framework\TestCase;

class StockUnitTest extends TestCase
{

    public function testIsTrue()
    {
        $owner = new User;
        $stock = new Stock;

        $stock->setCompanyName('company')
              ->setCurrentPrice(200)
              ->setOwner($owner)
        ;

        $this->assertTrue($stock->getCompanyName() === 'company');
        $this->assertTrue($stock->getCurrentPrice() == 200);
        $this->assertTrue($stock->getOwner() == $owner);
    }

    public function testIsFalse()
    {
        $falseOwner = new User;
        $trueOwner = new User;

        $stock = new Stock;

        $stock->setCompanyName('company')
              ->setCurrentPrice(200)
              ->setOwner($trueOwner)
        ;

        $this->assertFalse($stock->getCompanyName() === 'false');
        $this->assertFalse($stock->getCurrentPrice() == 'false');
        $this->assertFalse($stock->getOwner() === $falseOwner);
    }
}