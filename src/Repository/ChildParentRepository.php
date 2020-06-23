<?php

namespace App\Repository;

use App\Entity\ChildParent;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ChildParent|null find($id, $lockMode = null, $lockVersion = null)
 * @method ChildParent|null findOneBy(array $criteria, array $orderBy = null)
 * @method ChildParent[]    findAll()
 * @method ChildParent[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChildParentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ChildParent::class);
    }

    // /**
    //  * @return ChildParent[] Returns an array of ChildParent objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ChildParent
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
