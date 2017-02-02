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
    
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> dec132ddab9c241c7a4cf0bab8a09f478f4ed0df
         public function findLocalisation() {
        return $this->findBy(array("id" => 1));
    } 
    
<<<<<<< HEAD
=======
>>>>>>> 7118e2805159361516865ab3c0543bbb283daa5b
=======
>>>>>>> dec132ddab9c241c7a4cf0bab8a09f478f4ed0df
    public function cartepizzas()
    {
        $qb = $this->createQueryBuilder('a');

        $qb
          ->where('a.pizza_au_menu = :pizza_au_menu')
          ->setParameter('pizza_au_menu', 1);
<<<<<<< HEAD
<<<<<<< HEAD
         $qb->orderBy('a.base', 'DESC');
=======

>>>>>>> 7118e2805159361516865ab3c0543bbb283daa5b
=======
         $qb->orderBy('a.base', 'DESC');
>>>>>>> dec132ddab9c241c7a4cf0bab8a09f478f4ed0df
        return $qb
          ->getQuery()
          ->getResult();
    }
    
}