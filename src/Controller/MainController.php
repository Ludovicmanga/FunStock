<?php

namespace App\Controller;

use DateTime;
use App\Entity\Stock;
use App\Entity\Battle;
use GuzzleHttp\Client;
use App\Form\BattleType;
use App\Entity\StockAsset;
use Finnhub\Configuration;
use Finnhub\Api\DefaultApi;
use App\Form\BuyOrSellStocksType;
use App\Repository\UserRepository;
use App\Repository\StockRepository;
use App\Repository\BattleRepository;
use App\Services\UserServiceInterface;
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
        BattleRepository $battleRepository,
        EntityManagerInterface $entityManager,
        BattleServiceInterface $battleService,
        UserServiceInterface $userService
    ){
        $this->stockRepository = $stockRepository;
        $this->userRepository = $userRepository;
        $this->entityManager = $entityManager;
        $this->battleRepository = $battleRepository;
        $this->battleService = $battleService;
        $this->userService = $userService;
    }

    #[Route('/home', name: 'home')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $allStocks = $this->stockRepository->findAll();
        $allUsersButLoggedOne = $this->userService->findAllUsersButLoggedOne($this->getUser());

        foreach($allUsersButLoggedOne as $user){
            $user->setNumberOfWinnedBattles(count($user->getWinnedBattles()))
                 ->setNumberOfLostBattles(count($user->getLostBattles()))
            ;
        }

        $battle = new Battle;
        $battleForm = $this->createForm(BattleType::class, $battle);
        $battleForm->handleRequest($request);

        if($battleForm->isSubmitted() && $battleForm->isValid()){
            $attacker = $this->getUser();
            $this->battleService->createBattle($battle, $request, $attacker);
            return $this->redirectToRoute('home');
        }

        $stockAsset = new StockAsset;
        
        $buyOrSellStocksForm = $this->createForm(BuyOrSellStocksType::class, $stockAsset);
        $buyOrSellStocksForm->handleRequest($request);

    

        if($buyOrSellStocksForm->isSubmitted() && $buyOrSellStocksForm->isValid()){

            $amountToSpend = (int) filter_var($request->request->get('stock_amount'), FILTER_SANITIZE_NUMBER_INT);
            $numberOfActionsToBuy = round($amountToSpend / $stockAsset->getStock()->getCurrentPrice(), 5);
            
            $stockAsset->setOwner($this->getUser())
                       ->setQuantity($numberOfActionsToBuy)
            ;

            $this->entityManager->persist($stockAsset);
            $this->entityManager->flush();

        }

        // We get the battle requests of the user
        $pendingInboundBattleRequests = $this->battleService->findPendingInboundBattleRequestsByDefender($this->getUser());
        $pendingOutboundBattleRequests = $this->battleRepository->findPendingOutboundBattleRequestsByAttacker($this->getUser());
        $allBattles = $this->battleService->findAll();

        return $this->render('main/index.html.twig', [
            'battle_form' => $battleForm->createView(),
            'buy_or_sell_stocks_form' => $buyOrSellStocksForm->createView(),
            'controller_name' => 'MainController',
            'all_stocks' => $allStocks,
            'all_users_but_logged_one' => $allUsersButLoggedOne,
            'pending_inbound_battle_requests' => $pendingInboundBattleRequests,
            'pending_outbound_battle_requests' => $pendingOutboundBattleRequests,
            'all_battles' => $allBattles
        ]);
    }
}
