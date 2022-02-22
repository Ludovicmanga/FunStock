<?php

namespace App\Controller;

use DateTime;
use App\Entity\Battle;
use App\Form\BattleType;
use App\Repository\UserRepository;
use App\Repository\StockRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
    public function __construct(StockRepository $stockRepository, UserRepository $userRepository, EntityManagerInterface $entityManager){
        $this->stockRepository = $stockRepository;
        $this->userRepository = $userRepository;
        $this->entityManager = $entityManager;
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

            $battle->setBattleDate(new DateTime)
                   ->setAttacker($this->getUser())
                   ->setDefender($this->userRepository->findOneById($request->request->get('defender')))
                   ->setState('pending')
            ;

            $this->entityManager->persist($battle);
            $this->entityManager->flush();

            return $this->redirectToRoute('home');
        }

        return $this->render('main/index.html.twig', [
            'battle_form' => $battleForm->createView(),
            'controller_name' => 'MainController',
            'all_stocks' => $allStocks,
            'all_users' => $allUsers
        ]);
    }
}
