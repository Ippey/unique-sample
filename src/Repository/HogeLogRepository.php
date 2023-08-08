<?php

namespace App\Repository;

use App\Entity\HogeLog;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<HogeLog>
 *
 * @method HogeLog|null find($id, $lockMode = null, $lockVersion = null)
 * @method HogeLog|null findOneBy(array $criteria, array $orderBy = null)
 * @method HogeLog[]    findAll()
 * @method HogeLog[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HogeLogRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HogeLog::class);
    }

//    /**
//     * @return HogeLog[] Returns an array of HogeLog objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('h')
//            ->andWhere('h.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('h.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?HogeLog
//    {
//        return $this->createQueryBuilder('h')
//            ->andWhere('h.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
