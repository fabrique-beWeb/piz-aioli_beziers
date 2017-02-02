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
//$result = new JsonModel(array(
//	    'some_parameter' => 'some value',
//            'success'=>true,
//        ));
//        return $result;
//        $id = (int) $this->params()->fromRoute('id', 0);
//        if (!isset($_SESSION['panier']['pizza'])) {
//            $_SESSION['panier']['pizza'] = array();
//        } else {
//            array_push($_SESSION['panier']['pizza'], $id);
//             $cartnb = "54";
//             echo $cartnb;
//             
//             
//        }
        array_push($_SESSION['panier']['pizza'], "42");
        
        $var = strval(count($_SESSION['panier']['pizza']));

        return new JsonModel(array(
            'cartnb'=>$var,
            'success'=>"true",
        ));
 
        return $result;

    }
    
    
}