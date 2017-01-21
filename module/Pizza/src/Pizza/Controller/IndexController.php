<?php
 
namespace Pizza\Controller;
 
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Pizza\Form\FormAddPizza;
use Pizza\Service\ControllerServiceInterface;
 
class IndexController extends AbstractActionController {
    
    protected $service;
    protected $listeBase;
 
public function __construct(ControllerServiceInterface $service) {
    $this->service = $service->getService();
}
    
public function addAction() {
        $viewData = array();
        
        $listeBase = $this->service->getRepository('Pizza\Entity\TbBases')->findAll();
        
        $form = new FormAddPizza($listeBase);
        
        if( $this->getRequest()->isPost() )
        {   
            $newpizza = new \Pizza\Entity\TbPizzaPatron();
            
            $data = $this->getRequest()->getPost();
            $nom = $data['nom'];
            $base = $data['base'];
            
            $viewData['nom'] = $nom;
            $viewData['base'] = $base;
            
            $form->setData($data);
            $form->bindValues();
            
            $newpizza->setNom($nom);
            $newpizza->setBase($base);
            print_r ($base);

            $this->service->persist($newpizza);
            $this->service->flush();

            echo $newpizza->getId();
            
            
        }
        $viewData['form'] = $form;
        return new ViewModel($viewData);
    }
    
    public function pizofdayAction() {
        
        return new ViewModel(array(
             'listepizza_page' => $this->service->getRepository('Pizza\Entity\TbPizzaPatron')->pizofday(),
         ));
        

    }
    
    public function cartepizzasAction() {

        return new ViewModel(array(
             'listepizza_page' => $this->service->getRepository('Pizza\Entity\TbPizzaPatron')->cartepizzas(),
         ));
    }
 
    
}
