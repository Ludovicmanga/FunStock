<?php

namespace App\Controller;

use DateTime;
use App\Entity\Battle;
use App\Form\BattleType;
use App\Repository\UserRepository;
use App\Repository\StockRepository;
use App\Repository\BattleRepository;
use App\Services\BattleServiceInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
    public function __construct(
        StockRepository $stockRepository,
        UserRepository $userRepository,
        BattleRepository $battleRepository, EntityManagerInterface $entityManager,
        BattleServiceInterface $battleService
    ){
        $this->stockRepository = $stockRepository;
        $this->userRepository = $userRepository;
        $this->entityManager = $entityManager;
        $this->battleRepository = $battleRepository;
        $this->battleService = $battleService;
    }

    #[Route('/home', name: 'home')]
    public function index(Request $request): Response
    {
        $allStocks = $this->stockRepository->findAll();
        $allUsers = $this->userRepository->findAll();
        
        $battle = new Battle;
        $battleForm = $this->createForm(BattleType::class, $battle);
        $battleForm->handleRequest($request);

        if($battleForm->isSubmitted() && $battleForm->isValid()){
            $attacker = $this->getUser();
            $this->battleService->createBattle($battle, $request, $attacker);
            return $this->redirectToRoute('home');
        }

        // We get the battle requests of the user
        $pendingBattleRequests = $this->battleRepository->findPendingBattleRequestsByDefender($this->getUser());
        $allBattles = $this->battleService->findAll();

        return $this->render('main/index.html.twig', [
            'battle_form' => $battleForm->createView(),
            'controller_name' => 'MainController',
            'all_stocks' => $allStocks,
            'all_users' => $allUsers,
            'pending_battle_requests' => $pendingBattleRequests,
            'all_battles' => $allBattles
        ]);
    }
}
