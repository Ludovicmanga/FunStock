<?php

namespace App\Controller;

use App\Entity\Battle;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Entity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/battle', name: 'battle')]
class BattleController extends AbstractController
{
    #[Route('/accept/{battle}', name: '_accept_request')]
    #[Entity("battle", "repository.findOneById(battle)")]
    public function accept(Request $request, Battle $battle, EntityManagerInterface $entityManager): Response
    {
        $battle->setState('accepted');
        $entityManager->persist($battle);
        $entityManager->flush();
        
        return new JsonResponse([
            'code' => 200,
            'message' => 'Battle was accepted']
        );
    }

    #[Route('/decline/{battle}', name: '_decline_request')]
    #[Entity("battle", "repository.findOneById(battle)")]
    public function decline(Request $request, Battle $battle, EntityManagerInterface $entityManager): Response
    {
        $battle->setState('declined');
        $entityManager->persist($battle);
        $entityManager->flush();
        
        return new JsonResponse([
            'code' => 200,
            'message' => 'Battle was declined']
        );
    }
}
