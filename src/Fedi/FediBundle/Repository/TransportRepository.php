<?php

namespace Fedi\FediBundle\Repository;

/**
 * TransportRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TransportRepository extends \Doctrine\ORM\EntityRepository
{












































    public function Searchtype($type){

        $query=$this->getEntityManager()
            ->createQuery("
        select v from FediFediBundle:Transport v where  v.type LIKE :type
        ")

            ->setParameter('type',$type.'%');
        return $query ->getResult();

    }
}
