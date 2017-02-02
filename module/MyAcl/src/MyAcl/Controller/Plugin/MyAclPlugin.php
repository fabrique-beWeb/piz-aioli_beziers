<<<<<<< HEAD
<?php

namespace MyAcl\Controller\Plugin;

use Zend\Mvc\Controller\Plugin\AbstractPlugin;
use Zend\Session\Container as SessionContainer;
use Zend\Permissions\Acl\Acl;
use Zend\Permissions\Acl\Role\GenericRole as Role;
use Zend\Permissions\Acl\Resource\GenericResource as Resource;

class MyAclPlugin extends AbstractPlugin {

    protected $sesscontainer;
//
//    private function getSessContainer() {
//        
//        if (!$this->sesscontainer) {
//            $this->sesscontainer = new SessionContainer('zftutorial');
//        }
//        return $this->sesscontainer;
//    }

    public function doAuthorization($e) {
        session_start();
        
        $sesscontainer->role = $_SESSION['role'];
        // set ACL
        $acl = new Acl();
        $acl->deny(); // on by default
        //$acl->allow(); // this will allow every route by default so then you have to explicitly deny all routes that you want to protect.		
        # ROLES ############################################
        $acl->addRole(new Role('anonymous'));
        $acl->addRole(new Role('user'), 'anonymous');
        $acl->addRole(new Role('admin'), 'user');
        # end ROLES ########################################
        # RESOURCES ########################################
        $acl->addResource('pizza');
        $acl->addResource('zfcadmin');
        $acl->addResource('user');
        # end RESOURCES ########################################
        ################ PERMISSIONS #######################
        // $acl->allow('role', 'resource', 'controller:action');
        // Pizza -------------------------->
        $acl->allow('anonymous', 'pizza');
        // zfcadmin -------------------------->
        $acl->deny('anonymous', 'zfcadmin');
        $acl->deny('user', 'zfcadmin');
        $acl->allow('admin', 'zfcadmin');


        $controller = $e->getTarget();
        $controllerClass = get_class($controller);
        $moduleName = strtolower(substr($controllerClass, 0, strpos($controllerClass, '\\')));

        $role = (!$sesscontainer->role ) ? 'anonymous' : $sesscontainer->role;
        $routeMatch = $e->getRouteMatch();

        $actionName = strtolower($routeMatch->getParam('action', 'not-found')); // get the action name	
        $controllerName = $routeMatch->getParam('controller', 'not-found'); // get the controller name	
        $controllerName = strtolower(array_pop(explode('\\', $controllerName)));


//		print '<br>$moduleName: '.$moduleName.'<br>'; 
//		print '<br>$controllerClass: '.$controllerClass.'<br>'; 
//		print '$controllerName: '.$controllerName.'<br>'; 
//		print '$action: '.$actionName.'<br>'; 
        #################### Check Access ########################
        if (!$acl->isAllowed($role, $moduleName, $controllerName . ':' . $actionName)) {
            $router = $e->getRouter();
            // $url    = $router->assemble(array(), array('name' => 'Login/auth')); // assemble a login route
            $url = $router->assemble(array(), array('name' => 'index'));
            $response = $e->getResponse();
            $response->setStatusCode(302);
            // redirect to login page or other page.
            $response->getHeaders()->addHeaderLine('Location', $url);
            $e->stopPropagation();
        }
    }

}
=======
<?php

namespace MyAcl\Controller\Plugin;

use Zend\Mvc\Controller\Plugin\AbstractPlugin;
use Zend\Session\Container as SessionContainer;
use Zend\Permissions\Acl\Acl;
use Zend\Permissions\Acl\Role\GenericRole as Role;
use Zend\Permissions\Acl\Resource\GenericResource as Resource;

class MyAclPlugin extends AbstractPlugin {

    protected $sesscontainer;
//
//    private function getSessContainer() {
//        
//        if (!$this->sesscontainer) {
//            $this->sesscontainer = new SessionContainer('zftutorial');
//        }
//        return $this->sesscontainer;
//    }

    public function doAuthorization($e) {
        session_start();
        
        $sesscontainer->role = $_SESSION['role'];
        // set ACL
        $acl = new Acl();
        $acl->deny(); // on by default
        //$acl->allow(); // this will allow every route by default so then you have to explicitly deny all routes that you want to protect.		
        # ROLES ############################################
        $acl->addRole(new Role('anonymous'));
        $acl->addRole(new Role('user'), 'anonymous');
        $acl->addRole(new Role('admin'), 'user');
        # end ROLES ########################################
        # RESOURCES ########################################
        $acl->addResource('pizza');
        $acl->addResource('zfcadmin');
        $acl->addResource('user');
        # end RESOURCES ########################################
        ################ PERMISSIONS #######################
        // $acl->allow('role', 'resource', 'controller:action');
        // Pizza -------------------------->
        $acl->allow('anonymous', 'pizza');
        // zfcadmin -------------------------->
        $acl->deny('anonymous', 'zfcadmin');
        $acl->deny('user', 'zfcadmin');
        $acl->allow('admin', 'zfcadmin');


        $controller = $e->getTarget();
        $controllerClass = get_class($controller);
        $moduleName = strtolower(substr($controllerClass, 0, strpos($controllerClass, '\\')));

        $role = (!$sesscontainer->role ) ? 'anonymous' : $sesscontainer->role;
        $routeMatch = $e->getRouteMatch();

        $actionName = strtolower($routeMatch->getParam('action', 'not-found')); // get the action name	
        $controllerName = $routeMatch->getParam('controller', 'not-found'); // get the controller name	
        $controllerName = strtolower(array_pop(explode('\\', $controllerName)));


//		print '<br>$moduleName: '.$moduleName.'<br>'; 
//		print '<br>$controllerClass: '.$controllerClass.'<br>'; 
//		print '$controllerName: '.$controllerName.'<br>'; 
//		print '$action: '.$actionName.'<br>'; 
        #################### Check Access ########################
        if (!$acl->isAllowed($role, $moduleName, $controllerName . ':' . $actionName)) {
            $router = $e->getRouter();
            // $url    = $router->assemble(array(), array('name' => 'Login/auth')); // assemble a login route
            $url = $router->assemble(array(), array('name' => 'index'));
            $response = $e->getResponse();
            $response->setStatusCode(302);
            // redirect to login page or other page.
            $response->getHeaders()->addHeaderLine('Location', $url);
            $e->stopPropagation();
        }
    }

}
>>>>>>> dec132ddab9c241c7a4cf0bab8a09f478f4ed0df
