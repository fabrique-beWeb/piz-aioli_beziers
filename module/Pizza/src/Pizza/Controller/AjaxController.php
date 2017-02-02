<?php

namespace Pizza\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Pizza\Service\ControllerServiceInterface;
use Zend\View\Model\JsonModel;

class AjaxController extends AbstractActionController {

    protected $service;
    protected $listeBase;

    public function __construct(ControllerServiceInterface $service) {
        $this->service = $service->getService();
    }

    public function addtocartAction() {


        $id = (int) $this->params()->fromRoute('id', 0);

        if (!isset($_SESSION['panier']['pizza'])) {
            $_SESSION['panier']['pizza'] = array();
            array_push($_SESSION['panier']['pizza'], $id);
            return new JsonModel(array(
                'cartnb' => count($_SESSION['panier']['pizza']),
                'success' => true,
            ));

            return $result;
        } else {
            array_push($_SESSION['panier']['pizza'], $id);
            return new JsonModel(array(
                'cartnb' => count($_SESSION['panier']['pizza']),
                'success' => true,
            ));

            return $result;
        }
    }

    public function emptycartAction() {

        if (isset($_SESSION['panier']['pizza'])) {
            unset($_SESSION['panier']['pizza']);
            return new JsonModel(array(
                'cartnb' => count($_SESSION['panier']['pizza']),
                'success' => true,
            ));

            return $emptycart;
        } else {
            return new JsonModel(array(
                'cartnb' => 0,
                'success' => true,
            ));

            return $emptycart;
        }
    }
    
    public function listcartAction() {
if (!isset($_SESSION['panier']['pizza'])) { return new JsonModel(array(
                'listcart' => "vide",
                'success' => true,
            ));
return $listcart;

 }
 else {
     return new JsonModel(array(
                'listcart' => "plein",
                'success' => true,
            ));
     return $listcart;
 }

    }

}
