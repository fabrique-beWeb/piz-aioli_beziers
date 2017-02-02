<?php
/**
 * This makes our life easier when dealing with paths. Everything is relative
 * to the application root now.
 */
define('REQUEST_MICROTIME', microtime(true));

chdir(dirname(__DIR__));

<<<<<<< HEAD
<<<<<<< HEAD
define('ROOT_PATH', './');

=======
>>>>>>> 7118e2805159361516865ab3c0543bbb283daa5b
=======
define('ROOT_PATH', './');

>>>>>>> dec132ddab9c241c7a4cf0bab8a09f478f4ed0df
// Decline static file requests back to the PHP built-in webserver
if (php_sapi_name() === 'cli-server' && is_file(__DIR__ . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))) {
    return false;
}
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> 7118e2805159361516865ab3c0543bbb283daa5b
=======
>>>>>>> dec132ddab9c241c7a4cf0bab8a09f478f4ed0df
// Setup autoloading
require 'init_autoloader.php';

// Run the application!
<<<<<<< HEAD
<<<<<<< HEAD
Zend\Mvc\Application::init(require 'config/application.config.php')->run();
=======
Zend\Mvc\Application::init(require 'config/application.config.php')->run();
>>>>>>> 7118e2805159361516865ab3c0543bbb283daa5b
=======
Zend\Mvc\Application::init(require 'config/application.config.php')->run();
>>>>>>> dec132ddab9c241c7a4cf0bab8a09f478f4ed0df
