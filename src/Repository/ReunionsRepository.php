<?php

namespace App\Repository;

use App\Entity\Reunions;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Reunions|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reunions|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reunions[]    findAll()
 * @method Reunions[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReunionsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Reunions::class);
    }

    // /**
    //  * @return Reunions[] Returns an array of Reunions objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Reunions
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
