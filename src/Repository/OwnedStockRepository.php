<?php

namespace App\Repository;

use App\Entity\OwnedStock;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method OwnedStock|null find($id, $lockMode = null, $lockVersion = null)
 * @method OwnedStock|null findOneBy(array $criteria, array $orderBy = null)
 * @method OwnedStock[]    findAll()
 * @method OwnedStock[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OwnedStockRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OwnedStock::class);
    }

    // /**
    //  * @return OwnedStock[] Returns an array of OwnedStock objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?OwnedStock
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
