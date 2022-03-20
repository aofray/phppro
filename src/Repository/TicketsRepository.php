<?php

namespace App\Repository;

use App\Entity\Tickets;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\DBAL\Result;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Tickets|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tickets|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tickets[]    findAll()
 * @method Tickets[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TicketsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tickets::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Tickets $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(Tickets $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return Tickets[] Returns an array of Tickets objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */


    public function UserTickets($value): ?array
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.email = :email')
            ->setParameter('email', $value)
            ->orderBy('t.created_at', 'DESC')

            ->getQuery()
            ->getResult();
    }
    public function TicketsByStatus($status, $offset): ?array
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.status = :status')
            ->orderBy('t.status', 'DESC')
            ->orderBy('t.created_at', 'ASC')
            ->setFirstResult( $offset )
            ->setMaxResults( 10 )
            ->setParameter('status', $status)
            ->getQuery()
            ->getResult();
    }
    public function TicketsByInterval($sort, $status): ?array
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.status = :status')
            ->orderBy('t.created_at', $sort)
            ->getQuery()
            ->setParameter('status', $status)
            ->getResult();
    }

    public function SortTickets($sort, $status): ?array
    {
        $conn = $this->getEntityManager()->getConnection();

        $query =  'SELECT * FROM tickets t WHERE t.status = :status ';

        $arguments= ['status'=>$status];
        if (isset($sort["date_from"]) && $sort["date_from"]!==""){
            $query = $query.' and cast(t.created_at as date) >= :date_from ';

            $arguments['date_from']=$sort["date_from"];
        }
//
        if (isset($sort["date_to"]) && $sort["date_to"]!==""){

            $query = $query.' and cast(t.created_at as date) <= :date_to ';

            $arguments['date_to']=$sort["date_to"];
        }

        if (isset($sort["sort"]) && $sort["sort"]!==""){
            $query = $query.' ORDER BY t.created_at '.$sort["sort"];
        }

        $query .= ' LIMIT 10 ';

        if (isset($sort["offset"]) && $sort["offset"]!==""){
            $query = $query.' offset '.$sort["offset"];
        }

        $stmt = $conn->prepare($query);

       $result =  $stmt->executeQuery($arguments)->fetchAllAssociative();

        return $result;

    }
}
