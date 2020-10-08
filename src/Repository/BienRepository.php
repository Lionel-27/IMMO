<?php

namespace App\Repository;

use App\Entity\Bien;
use App\Entity\Search;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Bien|null find($id, $lockMode = null, $lockVersion = null)
 * @method Bien|null findOneBy(array $criteria, array $orderBy = null)
 * @method Bien[]    findAll()
 * @method Bien[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BienRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Bien::class);
    }


/**
 * @return Query
 */
    public function findPaginateBien()
    {   
        
        return $this->createQueryBuilder('a')
                    ->orderBy('a.created_at', 'ASC')
                    ->getQuery();
    }


    public function findAllBienPaginateQuery(Search $search)
    {
         $query = $this->createQueryBuilder('a');
       

        if($search->getSearchTitre()) {
            $query = $query->andWhere('a.title LIKE :searchbientitre')
                           ->setParameter('searchbientitre','%'.addcslashes($search->SearchTitre(),'%_').'%');
        }

       
        if($search->getCategorie()) {
            $query = $query->andWhere('bien.categorie LIKE :searchbiencategorie')
                           ->setParameter('searchbiencategorie','%'.addcslashes($search->getCategorie(),'%_').'%');
        }

        if($search->getType()) {
            $query = $query->andWhere('bien.type LIKE :searchbientype')
                           ->setParameter('searchbientype','%'.addcslashes($search->getType(),'%_').'%');
        }

         if($search->getprixMax()) {
            $query = $query->andWhere('bien.prix <= :prixMax')
                           ->setParameter('prixMax',$search->getprixMax());
        }

       


        return $query->getQuery();
        
           

    } 

}