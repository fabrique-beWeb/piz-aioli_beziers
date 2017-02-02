<?php

namespace Pizza;

<<<<<<< HEAD
<<<<<<< HEAD
use Zend\Session\Container as SessionContainer;

class Module {

    public function getConfig() {
        return include __DIR__ . '/config/module.config.php';
    }
    
    public function getAutoloaderConfig() {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }


}
=======
class Module
{
=======
use Zend\Session\Container as SessionContainer;
>>>>>>> dec132ddab9c241c7a4cf0bab8a09f478f4ed0df

class Module {

    public function getConfig() {
        return include __DIR__ . '/config/module.config.php';
    }
    
    public function getAutoloaderConfig() {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }


}
<<<<<<< HEAD
}
>>>>>>> 7118e2805159361516865ab3c0543bbb283daa5b
=======
>>>>>>> dec132ddab9c241c7a4cf0bab8a09f478f4ed0df
