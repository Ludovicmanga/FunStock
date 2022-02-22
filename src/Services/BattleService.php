<?php

namespace App\Services;

use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;

Class BattleService implements BattleServiceInterface
{
    private $entityManager;
    private $userRepository;

    public function __construct(EntityManagerInterface $entityManager, UserRepository $userRepository)
    {
        $this->entityManager = $entityManager;
        $this->userRepository = $userRepository;
    }

    public function createBattle($battle, $request)
    {
        $battle->setBattleDate(new DateTime)
                ->setAttacker($this->getUser())
                ->setDefender($this->userRepository->findOneById($request->request->get('defender')))
                ->setState('pending')
            ;

            $this->entityManager->persist($battle);
            $this->entityManager->flush();
    }
}