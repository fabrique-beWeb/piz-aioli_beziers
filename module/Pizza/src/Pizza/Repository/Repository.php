<?php

namespace Pizza\Repository;

use Doctrine\ORM\EntityRepository;

class Repository extends EntityRepository
{
    public function findAll()
    {
        return $this->findBy(array(), array('nom' => 'ASC'));
    }
    
    public function pizofday()
    {
        $qb = $this->createQueryBuilder('a');

        $qb
          ->where('a.pizofday = :pizofday')
          ->setParameter('pizofday', 1);

        return $qb
          ->getQuery()
          ->getResult();
    }
    
    public function cartepizzas()
    {
        $qb = $this->createQueryBuilder('a');

        $qb
          ->where('a.pizza_au_menu = :pizza_au_menu')
          ->setParameter('pizza_au_menu', 1);

        return $qb
          ->getQuery()
          ->getResult();
    }
    
}