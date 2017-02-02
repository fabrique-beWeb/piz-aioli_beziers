<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

return array(
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> dec132ddab9c241c7a4cf0bab8a09f478f4ed0df
    'db' => array(
        'driver' => 'Pdo',
        'dsn'            => 'mysql:dbname=pizzaioli;hostname=localhost',
        'username'       => 'root',
        'password'       => 'root',
        'driver_options' => array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'Zend\Db\Adapter\Adapter' => 'Zend\Db\Adapter\AdapterServiceFactory',
        ),
    ),
);
<<<<<<< HEAD
=======
);
>>>>>>> 7118e2805159361516865ab3c0543bbb283daa5b
=======
>>>>>>> dec132ddab9c241c7a4cf0bab8a09f478f4ed0df
