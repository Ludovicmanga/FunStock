<?php

namespace App\Services;

use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;

Class UserService implements UserServiceInterface
{
    private $entityManager;
    private $userRepository;

    public function __construct(
        EntityManagerInterface $entityManager,
        UserRepository $userRepository,
    )
    {
        $this->entityManager = $entityManager;
        $this->userRepository = $userRepository;
    }

    public function findAllUsersButLoggedOne($loggedUser)
    {
        return $this->userRepository->findAllUsersButLoggedOne($loggedUser);
    }
}