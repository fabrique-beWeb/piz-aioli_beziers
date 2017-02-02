<?php

namespace Pizza\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Pizza\Form\FormAddPizza;
>>>>>>> 7118e2805159361516865ab3c0543bbb283daa5b
=======
>>>>>>> dec132ddab9c241c7a4cf0bab8a09f478f4ed0df
use Pizza\Service\ControllerServiceInterface;

class IndexController extends AbstractActionController {

    protected $service;
    protected $listeBase;

    public function __construct(ControllerServiceInterface $service) {
        $this->service = $service->getService();
    }

    public function pizofdayAction() {
<<<<<<< HEAD
<<<<<<< HEAD
        $pizzadujour = $this->service->getRepository('Pizza\Entity\TbPizzaPatron')->pizofday();

        return new ViewModel(array(
            'listepizza_page' => $pizzadujour
=======

        return new ViewModel(array(
            'listepizza_page' => $this->service->getRepository('Pizza\Entity\TbPizzaPatron')->pizofday(),
>>>>>>> 7118e2805159361516865ab3c0543bbb283daa5b
=======
        $pizzadujour = $this->service->getRepository('Pizza\Entity\TbPizzaPatron')->pizofday();

        return new ViewModel(array(
            'listepizza_page' => $pizzadujour
>>>>>>> dec132ddab9c241c7a4cf0bab8a09f478f4ed0df
        ));
    }

    public function cartepizzasAction() {

        return new ViewModel(array(
            'listepizza_page' => $this->service->getRepository('Pizza\Entity\TbPizzaPatron')->cartepizzas(),
        ));
    }
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> dec132ddab9c241c7a4cf0bab8a09f478f4ed0df
    
    public function disconnectAction() {
     if (isset($_SESSION['email'])) { unset($_SESSION); session_destroy();
     }

     return $this->redirect()->toRoute('index');
}
public function localisationAction() {
        
        return new ViewModel(array(
            'localisation' =>  $this->service->getRepository('Pizza\Entity\TbInfosSociete')->findlocalisation(),
        ));
     }
<<<<<<< HEAD
=======
>>>>>>> 7118e2805159361516865ab3c0543bbb283daa5b
=======
>>>>>>> dec132ddab9c241c7a4cf0bab8a09f478f4ed0df

}
