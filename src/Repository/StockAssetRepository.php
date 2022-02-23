<?php

namespace App\Repository;

use App\Entity\StockAsset;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method StockAsset|null find($id, $lockMode = null, $lockVersion = null)
 * @method StockAsset|null findOneBy(array $criteria, array $orderBy = null)
 * @method StockAsset[]    findAll()
 * @method StockAsset[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StockAssetRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StockAsset::class);
    }

    // /**
    //  * @return StockAsset[] Returns an array of StockAsset objects
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
    public function findOneBySomeField($value): ?StockAsset
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
