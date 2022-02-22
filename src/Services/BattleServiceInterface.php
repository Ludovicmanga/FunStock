<?php

namespace App\Services;

interface BattleServiceInterface
{
    public function createBattle($battle, $request, $attacker);
    public function findAll();
}