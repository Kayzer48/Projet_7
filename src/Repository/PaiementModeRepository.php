<?php

namespace App\Repository;

use App\Entity\PaiementMode;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PaiementMode|null find($id, $lockMode = null, $lockVersion = null)
 * @method PaiementMode|null findOneBy(array $criteria, array $orderBy = null)
 * @method PaiementMode[]    findAll()
 * @method PaiementMode[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PaiementModeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PaiementMode::class);
    }

    // /**
    //  * @return PaiementMode[] Returns an array of PaiementMode objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PaiementMode
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
