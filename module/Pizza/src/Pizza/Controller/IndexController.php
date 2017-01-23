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

        $form = new FormAddPizza($this->service);

        if ($this->getRequest()->isPost()) {
            $newpizza = new \Pizza\Entity\TbPizzaPatron();
            $dataForm = $this->getRequest()->getPost();
            
            foreach($dataForm['ingredients'] as $ingredientId){
                $ingredients[] = $this->service->getRepository('\Pizza\Entity\TbIngredients')->find($ingredientId);
            }
            $base = $this->service->getRepository('\Pizza\Entity\TbBases')->find($dataForm['base']);
            $newpizza->setIngredients($ingredients);
            $newpizza->setBase($base);
            $newpizza->setNom($dataForm['nom']);

            $this->service->persist($newpizza);
            $this->service->flush();
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
