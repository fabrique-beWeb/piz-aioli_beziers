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
