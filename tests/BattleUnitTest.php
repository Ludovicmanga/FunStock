<?php

namespace App\Tests;

use DateTime;
use App\Entity\User;
use App\Entity\Stock;
use App\Entity\Battle;
use PHPUnit\Framework\TestCase;

class BattleUnitTest extends TestCase
{

    public function testIsTrue()
    {
        $battle = new Battle;
        $stock = new Stock;
        $dateTime = new DateTime;
        $attacker = new User;
        $defender = new User;

        $battle->setStock($stock)
               ->setAttacker($attacker)
               ->setDefender($defender)
               ->setBattleDate($dateTime)
               ->setState('doing')
               ->setAccepted(true)
               ->setstockVariationDirectionPrediction('up')
               ->setStockPercentagePrediction(48)
               ->setPredictionDate($dateTime)
        ;

        $this->assertTrue($battle->getStock() === $stock);
        $this->assertTrue($battle->getAttacker() === $attacker);
        $this->assertTrue($battle->getDefender() === $defender);
        $this->assertTrue($battle->getBattleDate() === $dateTime);
        $this->assertTrue($battle->getState() === 'doing');
        $this->assertTrue($battle->getAccepted() === true);
        $this->assertTrue($battle->getStockVariationDirectionPrediction() === 'up');
        $this->assertTrue($battle->getStockPercentagePrediction() == 48);
        $this->assertTrue($battle->getPredictionDate() === $dateTime);
    }

    public function testIsFalse()
    {
        $battle = new Battle;
        $stock = new Stock;
        $dateTime = new DateTime;
        $attacker = new User;
        $defender = new User;

        $battle->setStock($stock)
               ->setAttacker($attacker)
               ->setDefender($defender)
               ->setBattleDate($dateTime)
               ->setState('Doing')
               ->setAccepted(true)
               ->setStockVariationDirectionPrediction('up')
               ->setStockPercentagePrediction(48)
               ->setPredictionDate($dateTime)
        ;

        $this->assertFalse($battle->getStock() === 'false');
        $this->assertFalse($battle->getAttacker() === 'false');
        $this->assertFalse($battle->getDefender() === 'false');
        $this->assertFalse($battle->getBattleDate() === 'false');
        $this->assertFalse($battle->getState() === 'false');
        $this->assertFalse($battle->getAccepted() === false);
        $this->assertFalse($battle->getStockVariationDirectionPrediction() === 'false');
        $this->assertFalse($battle->getStockPercentagePrediction() === 'false');
        $this->assertFalse($battle->getPredictionDate() === 'false');
    }
}