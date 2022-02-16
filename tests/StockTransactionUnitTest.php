<?php

namespace App\Tests;

use DateTime;
use App\Entity\User;
use App\Entity\Stock;
use PHPUnit\Framework\TestCase;
use App\Entity\StockTransaction;

class StockTransactionUnitTest extends TestCase
{

    public function testIsTrue()
    {
        $owner = new User;
        $stock = new Stock;
        $stockTransaction = new StockTransaction;
        $dateTime = new DateTime;

        $stockTransaction->setStock($stock)
                         ->setOwner($owner)
                         ->setDate($dateTime)
                         ->setType('buy')
                         ->setQuantity(3)
        ;

        $this->assertTrue($stockTransaction->getStock() === $stock);
        $this->assertTrue($stockTransaction->getOwner() === $owner);
        $this->assertTrue($stockTransaction->getDate() === $dateTime);
        $this->assertTrue($stockTransaction->getType() === 'buy');
        $this->assertTrue($stockTransaction->getQuantity() == 3);

    }

    public function testIsFalse()
    {
        $owner = new User;
        $stock = new Stock;
        $stockTransaction = new StockTransaction;
        $dateTime = new DateTime;

        $stockTransaction->setStock($stock)
                         ->setOwner($owner)
                         ->setDate($dateTime)
                         ->setType('buy')
                         ->setQuantity(3)
        ;

        $this->assertFalse($stockTransaction->getStock() === 'false');
        $this->assertFalse($stockTransaction->getOwner() === 'false');
        $this->assertFalse($stockTransaction->getDate() === 'false');
        $this->assertFalse($stockTransaction->getType() === 'false');
        $this->assertFalse($stockTransaction->getQuantity() == 'false');
    }
}