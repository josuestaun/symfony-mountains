<?php

namespace App\Repository;

use App\Entity\Mountains;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Mountains|null find($id, $lockMode = null, $lockVersion = null)
 * @method Mountains|null findOneBy(array $criteria, array $orderBy = null)
 * @method Mountains[]    findAll()
 * @method Mountains[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MountainsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Mountains::class);
    }
    
    public function _findByHeight() {
        $query = $this->getEntityManager()
                        ->createQuery(
                                'SELECT m FROM App\Entity\Mountains 
                                ORDER BY m.altura'
                        );
        return $query->getResult();
    }

    // /**
    //  * @return Mountains[] Returns an array of Mountains objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Mountains
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
