<?php

namespace App\Services;

use DateTime;
use App\Repository\UserRepository;
use App\Repository\StockRepository;
use App\Repository\BattleRepository;
use Doctrine\ORM\EntityManagerInterface;

Class BattleService implements BattleServiceInterface
{
    private $entityManager;
    private $userRepository;
    private $battleRepository;

    public function __construct(
        EntityManagerInterface $entityManager,
        UserRepository $userRepository,
        BattleRepository $battleRepository,
        StockRepository $stockRepository 
    )
    {
        $this->entityManager = $entityManager;
        $this->userRepository = $userRepository;
        $this->battleRepository = $battleRepository;
        $this->stockRepository = $stockRepository;
    }

    public function createBattle($battle, $request, $attacker)
    {
        $battle->setBattleDate(new DateTime)
                ->setAttacker($attacker)
                ->setDefender($this->userRepository->findOneById($request->request->get('defender')))
                ->setStock($this->stockRepository->findOneById($request->request->get('stock')))
                ->setStockVariationDirectionPrediction($request->request->get('direction_prediction'))
                ->setState('pending')
            ;

            $this->entityManager->persist($battle);
            $this->entityManager->flush();
    }

    public function findPendingInboundBattleRequestsByDefender($user)
    {
        return $this->battleRepository->findPendingInboundBattleRequestsByDefender($user);
    }

    public function findPendingOutboundBattleRequestsByAttacker($user)
    {
        return $this->battleRepository->findPendingOutboundPBattleRequestsByAttacker($user);
    }


    public function findAll()
    {
        return $this->battleRepository->findAll();
    }
}