<?php
namespace Pizza;

return array(
    'router' => array(
        'routes' => array(
            'index' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        'controller' => 'Pizza\Controller\Index',
                        'action'     => 'pizofday',
                    ),
                ),
            ),
            'cartepizzas' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/cartepizzas',
                    'defaults' => array(
                        'controller' => 'Pizza\Controller\Index',
                        'action'     => 'cartepizzas',
                    ),
                ),
            ),
            'test' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/test',
                    'defaults' => array(
                        'controller' => 'Pizza\Controller\Index',
                        'action'     => 'add',
                    ),
                ),
            ),
        ),
    ),
    'controllers' => array(
        'factories' => array(
                 'Pizza\Controller\Index' => 'Pizza\Factory\PizzaControllerFactory'
               ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'pizza/index/index' => __DIR__ . '/../view/pizza/index/index.phtml',
            'pizza/index/test' => __DIR__ . '/../view/pizza/index/test.phtml',
            'pizza/index/add' => __DIR__ . '/../view/pizza/index/test.phtml',
            'pizza/index/cartepizzas' => __DIR__ . '/../view/pizza/index/pizza_au_menu.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml'
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    'doctrine' => array(
        'driver' => array(
            __NAMESPACE__ . '_driver' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => array(__DIR__ . '/../src/' . __NAMESPACE__ . '/Entity',
                )
            ),
            'orm_default' => array(
                'drivers' => array(
                    __NAMESPACE__ . '\Entity' => __NAMESPACE__ . '_driver'
                )
            )
        )
    ),
);