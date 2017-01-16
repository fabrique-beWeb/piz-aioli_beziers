<?php

namespace Pizza;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;

use Pizza\Model\Listepizza;
use Pizza\Model\ListepizzaTable;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\TableGateway;

class Module
{

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }
   
    public function getServiceConfig()
    {
        return array(
            'factories' => array(
                'Pizza\Model\ListepizzaTable' =>  function($sm) {
                    $tableGateway = $sm->get('ListepizzaTableGateway');
                    $table = new ListepizzaTable($tableGateway);
                    return $table;
                },
                'ListepizzaTableGateway' => function ($sm) {
                	$dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
                	$resultSetPrototype = new ResultSet();
                	$resultSetPrototype->setArrayObjectPrototype(new Listepizza());
                	return new TableGateway('tb_pizza_patron', $dbAdapter, null, $resultSetPrototype);
                }
            ),
        );
    }   

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
}