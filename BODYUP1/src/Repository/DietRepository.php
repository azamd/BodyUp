<?php

namespace App\Repository;

use App\Entity\Diet;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Diet|null find($id, $lockMode = null, $lockVersion = null)
 * @method Diet|null findOneBy(array $criteria, array $orderBy = null)
 * @method Diet[]    findAll()
 * @method Diet[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DietRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Diet::class);
    }

    function tri_asc(){
        return $this->createQueryBuilder('diet')
            ->orderBy('diet.calories', 'ASC')
            ->getQuery()->getResult();
    }



    // /**
    //  * @return Diet[] Returns an array of Diet objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Diet
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
