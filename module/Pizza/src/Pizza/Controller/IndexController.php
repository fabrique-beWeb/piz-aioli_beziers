<?php
 
namespace Pizza\Controller;
 
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
 
class IndexController extends AbstractActionController {

    
   public function testAction() {
        $entityManager = $this
            ->getServiceLocator()
            ->get('Doctrine\ORM\EntityManager');
        $newpizza = new \Pizza\Entity\TbPizzaPatron();
        $newpizza->setNom('La ravissante');
        $newpizza->setBase('0');
        $newpizza->setPizofday('0');
        $newpizza->setPizza_au_menu('1');
        $newpizza->setPrix('10');
        $newpizza->setUrl_img('bagnat.jpg');
        $newpizza->addIngredient();

        $entityManager->persist($newpizza);
        $entityManager->flush();

        echo $newpizza->getId();

        return new ViewModel();
    }
    
    public function pizofdayAction() {
        $entityManager = $this
            ->getServiceLocator()
            ->get('Doctrine\ORM\EntityManager');

        return new ViewModel(array(
             'listepizza_page' => $entityManager->getRepository('Pizza\Entity\TbPizzaPatron')->pizofday(),
         ));
    }
    
    public function cartepizzasAction() {
        $entityManager = $this
            ->getServiceLocator()
            ->get('Doctrine\ORM\EntityManager');

        return new ViewModel(array(
             'listepizza_page' => $entityManager->getRepository('Pizza\Entity\TbPizzaPatron')->cartepizzas(),
         ));
    }
 
    
}
