<?php

namespace Pizza;

return array(
    'router' => array(
        'routes' => array(
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> dec132ddab9c241c7a4cf0bab8a09f478f4ed0df
            //controller index
            'index' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'constraints' => array(
                        'id'     => '[0-9]+',
                    ),
<<<<<<< HEAD
=======
            'index' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
>>>>>>> 7118e2805159361516865ab3c0543bbb283daa5b
=======
>>>>>>> dec132ddab9c241c7a4cf0bab8a09f478f4ed0df
                'options' => array(
                    'route' => '/',
                    'defaults' => array(
                        'controller' => 'Pizza\Controller\Index',
                        'action' => 'pizofday',
                    ),
                ),
            ),
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> dec132ddab9c241c7a4cf0bab8a09f478f4ed0df
            'addtocart' => array(
                'type'    => 'segment',
                'options' => array(
                    'route' => '/addtocart[/:id]',
                    'defaults' => array(
                        'controller' => 'Pizza\Controller\Ajax',
                        'action' => 'addtocart',
                    ),
                ),
            ),
            'localisation' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/localisation',
                    'defaults' => array(
                        'controller' => 'Pizza\Controller\Index',
                        'action'     => 'localisation',
                        
                    )
                ),
            ),
<<<<<<< HEAD
=======
>>>>>>> 7118e2805159361516865ab3c0543bbb283daa5b
=======
>>>>>>> dec132ddab9c241c7a4cf0bab8a09f478f4ed0df
            'cartepizzas' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route' => '/cartepizzas',
                    'defaults' => array(
                        'controller' => 'Pizza\Controller\Index',
                        'action' => 'cartepizzas',
                    ),
                ),
            ),
<<<<<<< HEAD
<<<<<<< HEAD
            'disconnect' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route' => '/disconnect',
                    'defaults' => array(
                        'controller' => 'Pizza\Controller\Index',
                        'action' => 'disconnect',
                    ),
                ),
            ),
            'zfcadmin' => array(
                'options' => array(
                    'route' => '/backend',
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'editcarte' => array(
                        'type' => 'literal',
                        'options' => array(
                            'route' => '/editcarte',
                            'defaults' => array(
                                'controller' => 'Pizza\Controller\Editcarte',
                                'action' => 'index',
                            ),
                        ),
                    ),
                    'gestioncommandes' => array(
                        'type' => 'literal',
                        'options' => array(
                            'route' => '/gestioncommandes',
                            'defaults' => array(
                                'controller' => 'Pizza\Controller\Gestioncommandes',
                                'action' => 'index',
                            ),
                        ),
                    ),
                ),
            ),
            //controller Membre
            'userdetail' => array(
                'type' => 'segment',
                'options' => array(
                    'route' => '/detail[/:id]',
                    'constraints' => array(
                        'id' => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Pizza/Controller/Membre',
                        'action' => 'detail',
                    ),
                ),
            ),
//            'user' => array(
//                'type' => 'Segment',
//                'options' => array(
//                    'route' => '/membre/setting[/:id]',
//                    'constraints' => array(
//                        'id' => '[0-9]+',
//                    ),
//                    'defaults' => array(
//                        'controller' => 'Pizza/Controller/Membre',
//                        'action' => 'setting',
//                    ),
//                ),
//            ),
            'connect' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route' => '/connect',
                    'defaults' => array(
                        'controller' => 'Pizza\Controller\Log',
                        'action' => 'connect',
=======
            'adminpizza' => array(
=======
            'disconnect' => array(
>>>>>>> dec132ddab9c241c7a4cf0bab8a09f478f4ed0df
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route' => '/disconnect',
                    'defaults' => array(
                        'controller' => 'Pizza\Controller\Index',
                        'action' => 'disconnect',
                    ),
                ),
            ),
            'zfcadmin' => array(
                'options' => array(
                    'route' => '/backend',
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'editcarte' => array(
                        'type' => 'literal',
                        'options' => array(
                            'route' => '/editcarte',
                            'defaults' => array(
                                'controller' => 'Pizza\Controller\Editcarte',
                                'action' => 'index',
                            ),
                        ),
                    ),
                    'gestioncommandes' => array(
                        'type' => 'literal',
                        'options' => array(
                            'route' => '/gestioncommandes',
                            'defaults' => array(
                                'controller' => 'Pizza\Controller\Gestioncommandes',
                                'action' => 'index',
                            ),
                        ),
                    ),
                ),
            ),
            //controller Membre
            'userdetail' => array(
                'type' => 'segment',
                'options' => array(
                    'route' => '/detail[/:id]',
                    'constraints' => array(
                        'id' => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Pizza/Controller/Membre',
                        'action' => 'detail',
                    ),
                ),
            ),
//            'user' => array(
//                'type' => 'Segment',
//                'options' => array(
//                    'route' => '/membre/setting[/:id]',
//                    'constraints' => array(
//                        'id' => '[0-9]+',
//                    ),
//                    'defaults' => array(
//                        'controller' => 'Pizza/Controller/Membre',
//                        'action' => 'setting',
//                    ),
//                ),
//            ),
            'connect' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route' => '/connect',
                    'defaults' => array(
<<<<<<< HEAD
                        'controller' => 'Pizza\Controller\Admincommandes',
                        'action' => 'add',
>>>>>>> 7118e2805159361516865ab3c0543bbb283daa5b
=======
                        'controller' => 'Pizza\Controller\Log',
                        'action' => 'connect',
>>>>>>> dec132ddab9c241c7a4cf0bab8a09f478f4ed0df
                    ),
                ),
            ),
        ),
    ),
    'controllers' => array(
        'factories' => array(
            'Pizza\Controller\Index' => 'Pizza\Factory\IndexControllerFactory',
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> dec132ddab9c241c7a4cf0bab8a09f478f4ed0df
            'Pizza\Controller\Editcarte' => 'Pizza\Factory\EditcarteControllerFactory',
            'Pizza\Controller\Gestioncommandes' => 'Pizza\Factory\GestioncommandesControllerFactory',
            'Pizza\Controller\Membre' => 'Pizza\Factory\MembreControllerFactory',
            'Pizza\Controller\Log' => 'Pizza\Factory\LogControllerFactory',
            'Pizza\Controller\Ajax' => 'Pizza\Factory\AjaxControllerFactory',
<<<<<<< HEAD
=======
            'Pizza\Controller\Adminpizza' => 'Pizza\Factory\AdminpizzaControllerFactory',
            'Pizza\Controller\Admincommandes' => 'Pizza\Factory\AdmincommandesControllerFactory'
>>>>>>> 7118e2805159361516865ab3c0543bbb283daa5b
=======
>>>>>>> dec132ddab9c241c7a4cf0bab8a09f478f4ed0df
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions' => true,
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'exception_template' => 'error/index',
        'template_map' => array(
<<<<<<< HEAD
<<<<<<< HEAD
            //'module/controller/action'
            'layout/layout' => __DIR__ . '/../view/layout/layout.phtml',
            'error/404' => __DIR__ . '/../view/error/404.phtml',
            'error/index' => __DIR__ . '/../view/error/index.phtml',
            'pizza/index/pizofday' => __DIR__ . '/../view/pizza/index/pizofday.phtml',
            'pizza/ajax/index' => __DIR__ . '/../view/pizza/index/pizofday.phtml',
            'pizza/index/cartepizzas' => __DIR__ . '/../view/pizza/index/pizza_au_menu.phtml',
            'pizza/index/disconnect' => __DIR__ . '/../view/pizza/index/pizofday.phtml',
            'pizza/index/localisation' => __DIR__ . '/../view/pizza/index/localisation.phtml',
            'pizza/log/connect' => __DIR__ . '/../view/pizza/index/connect.phtml',
            'pizza/membre/detail' => __DIR__ . '/../view/pizza/index/detail.phtml',
            'pizza/editcarte/index' => __DIR__ . '/../view/pizza/index/editcarte.phtml',
            'pizza/gestioncommandes/index' => __DIR__ . '/../view/pizza/index/gestioncommandes.phtml',
        ),
//        'template_path_stack' => array(
//            __DIR__ . '/../view',
//        ),
        'template_path_stack' => array(
            'pizza' => __DIR__ . '/../view',
        ),        'strategies' => array(
            'ViewJsonStrategy',
        ),   ),
    
=======
=======
            //'module/controller/action'
>>>>>>> dec132ddab9c241c7a4cf0bab8a09f478f4ed0df
            'layout/layout' => __DIR__ . '/../view/layout/layout.phtml',
            'error/404' => __DIR__ . '/../view/error/404.phtml',
            'error/index' => __DIR__ . '/../view/error/index.phtml',
            'pizza/index/pizofday' => __DIR__ . '/../view/pizza/index/pizofday.phtml',
            'pizza/ajax/index' => __DIR__ . '/../view/pizza/index/pizofday.phtml',
            'pizza/index/cartepizzas' => __DIR__ . '/../view/pizza/index/pizza_au_menu.phtml',
            'pizza/index/disconnect' => __DIR__ . '/../view/pizza/index/pizofday.phtml',
            'pizza/index/localisation' => __DIR__ . '/../view/pizza/index/localisation.phtml',
            'pizza/log/connect' => __DIR__ . '/../view/pizza/index/connect.phtml',
            'pizza/membre/detail' => __DIR__ . '/../view/pizza/index/detail.phtml',
            'pizza/editcarte/index' => __DIR__ . '/../view/pizza/index/editcarte.phtml',
            'pizza/gestioncommandes/index' => __DIR__ . '/../view/pizza/index/gestioncommandes.phtml',
        ),
//        'template_path_stack' => array(
//            __DIR__ . '/../view',
//        ),
        'template_path_stack' => array(
<<<<<<< HEAD
            __DIR__ . '/../view',
        ),
    ),
>>>>>>> 7118e2805159361516865ab3c0543bbb283daa5b
=======
            'pizza' => __DIR__ . '/../view',
        ),        'strategies' => array(
            'ViewJsonStrategy',
        ),   ),
    
>>>>>>> dec132ddab9c241c7a4cf0bab8a09f478f4ed0df
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
                    __NAMESPACE__ . '\Entity' => __NAMESPACE__ . '_driver',
<<<<<<< HEAD
<<<<<<< HEAD
=======
//                    'Pizza\Entity' => 'zfcuser_entity',
>>>>>>> 7118e2805159361516865ab3c0543bbb283daa5b
=======
>>>>>>> dec132ddab9c241c7a4cf0bab8a09f478f4ed0df
                )
            )
        )
    ),
<<<<<<< HEAD
<<<<<<< HEAD
=======
//    'zfcuser' => array(
//    'user_entity_class'       => 'Pizza\Entity\TbUsers',
//    'enable_default_entities' => false,
//),
>>>>>>> 7118e2805159361516865ab3c0543bbb283daa5b
=======
>>>>>>> dec132ddab9c241c7a4cf0bab8a09f478f4ed0df
);
