<?php

namespace App\Services;

interface BattleServiceInterface
{
    public function createBattle($battle, $request, $attacker);
    public function findPendingInboundBattleRequestsByDefender($user);
    public function findPendingOutboundBattleRequestsByAttacker($user);
    public function findAll();
}