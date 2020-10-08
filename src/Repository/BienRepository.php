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
       
         //if($search->getSearch()){
            //$query = $query->innerJoin('bien.proprietaire','proprietaire')
                           //->addSelect('proprietaire')
                          // ->andWhere('bien.titre LIKE :searchbientitre')
                           //->setParameter('searchbientitre','%'.addcslashes($search->getSearch(),'%_').'%')
                          // ->orWhere('bien.description LIKE :searchbiendescription')
                          // ->setParameter('searchbiendescription','%'.addcslashes($search->getSearch(),'%_').'%');
                           //->orWhere('proprietaire.username LIKE :searchproprietaire')
                           //->->setParameter('searchproprietaire','%'.addcslashes($search->getSearch(),'%_').'%');
        // }

        if($search->getSearchTitre()) {
            $query = $query->andWhere('a.titre LIKE :searchbientitre')
                           ->setParameter('searchbientitre','%'.addcslashes($search->getSearchTitre(),'%_').'%');
        }

       
        if($search->getCategorie()) {
            $query = $query->andWhere('a.categorie LIKE :searchbiencategorie')
                           ->setParameter('searchbiencategorie','%'.addcslashes($search->getCategorie(),'%_').'%');
        }

        if($search->getType()) {
            $query = $query->andWhere('a.type LIKE :searchbientype')
                           ->setParameter('searchbientype','%'.addcslashes($search->getType(),'%_').'%');
        }

         if($search->getprixMax()) {
            $query = $query->andWhere('a.prix <= :prixMax')
                           ->setParameter('prixMax',$search->getprixMax());
        }

       


        return $query->getQuery();
        
           

    } 

}