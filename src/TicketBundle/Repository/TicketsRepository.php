<?php

namespace TicketBundle\Repository;

/**
 * TicketsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TicketsRepository extends \Doctrine\ORM\EntityRepository
{public  function findbyType($type){

    $query=$this->getEntityManager()
        ->createQuery("
        select p from TicketBundle:Tickets p where  p.type LIKE :type
        ")

        ->setParameter('type',$type.'%');
    return $query ->getResult();

}

}
