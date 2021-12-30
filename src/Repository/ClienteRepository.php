<?php

namespace App\Repository;

use App\Entity\Cliente;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;


/**
 * @method Cliente|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cliente|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cliente[]    findAll()
 * @method Cliente[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClienteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cliente::class);
    }

    /**
     * @return Clientes[]
     */
    public function listAll(): array
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT c
            FROM App\Entity\Cliente c
            '
        );

        // returns an array of Product objects
        return $query->getResult();
    }


    /**
     * @return Clientes[]
     */
    public function findAllInServer(String $servidor): array
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT c
            FROM App\Entity\Cliente c
            WHERE c.servidor > :servidor
            '
        )->setParameter('servidor', $servidor);

        // returns an array of Product objects
        return $query->getResult();
    }

    /**
     * @return Cliente[] Returns an array of Cliente objects by empresa
     */
    
    public function findByEmpresa($empresa)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.empresa = :empresa')
            ->setParameter('empresa', $empresa)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }

     /**
     * @return Cliente[] Returns an array of Cliente objects by server
     */
    
    public function findByServidor($servidor)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.servidor = :servidor')
            ->setParameter('servidor', $servidor)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }


    /*
    public function findOneBySomeField($value): ?Cliente
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


