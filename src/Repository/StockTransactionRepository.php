<?php

namespace App\Repository;

use App\Entity\StockTransaction;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method StockTransaction|null find($id, $lockMode = null, $lockVersion = null)
 * @method StockTransaction|null findOneBy(array $criteria, array $orderBy = null)
 * @method StockTransaction[]    findAll()
 * @method StockTransaction[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StockTransactionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StockTransaction::class);
    }

    // /**
    //  * @return StockTransaction[] Returns an array of StockTransaction objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?StockTransaction
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
