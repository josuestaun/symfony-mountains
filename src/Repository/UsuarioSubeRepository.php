<?php

namespace App\Repository;

use App\Entity\UsuarioSube;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UsuarioSube|null find($id, $lockMode = null, $lockVersion = null)
 * @method UsuarioSube|null findOneBy(array $criteria, array $orderBy = null)
 * @method UsuarioSube[]    findAll()
 * @method UsuarioSube[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UsuarioSubeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UsuarioSube::class);
    }

    // /**
    //  * @return UsuarioSube[] Returns an array of UsuarioSube objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UsuarioSube
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
