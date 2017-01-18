<?php
 
namespace Pizza\Controller;
 
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
 
class IndexController extends AbstractActionController {
    
    protected $listepizzaTable;

    
    public function indexAction()
     {
         return new ViewModel(array(
             'pizzas' => $this->getPizzaTable()->pizofday()
         ));
     }
    
    public function cartepizzasAction()
     {
         return new ViewModel(array(
             'listepizza_page' => $this->getPizzaTable()->listepizza_page(),
             'base1' => $this->getPizzaTable()->base()
         ));
     }
     
    public function getPizzaTable()
     {
         if (!$this->listepizzaTable) {
             $sm = $this->getServiceLocator();
             $this->listepizzaTable = $sm->get('Pizza\Model\ListePizzaTable');
         }
         return $this->listepizzaTable;
     }
 
}
