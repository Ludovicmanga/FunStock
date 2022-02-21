<?php

namespace App\Controller;

use App\Repository\UserRepository;
use App\Repository\StockRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
    public function __construct(StockRepository $stockRepository, UserRepository $userRepository){
        $this->stockRepository = $stockRepository;
        $this->userRepository = $userRepository;
    }

    #[Route('/home', name: 'home')]
    public function index(Request $request): Response
    {
        $allStocks = $this->stockRepository->findAll();
        $allUsers = $this->userRepository->findAll();

        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
            'all_stocks' => $allStocks,
            'all_users' => $allUsers
        ]);
    }
}
