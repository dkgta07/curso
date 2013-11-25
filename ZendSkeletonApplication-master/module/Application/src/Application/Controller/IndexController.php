<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
//use Application\Service\UsuarioService;
use Curso\Service\UsuarioService;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
    	echo "Hola mundo estoy en el ACTION INDEX";
        return new ViewModel();
    }
    public function HolaAction()
    {
    echo"Hola mundo estoy en el ACTION HOLA";
    
    $params = $this->params()->fromRoute();
    print_r($params);
    
    $usuario = $this->getServiceLocator()->get('Curso\Service\UsuarioService');
//    $usuario->testDB();
    $usuario->loadById(1);
    
//     	$usuario->setNombre('Annie');
//     	$usuario->setApellidoP('Rodriguez');
//     	$usuario->setApellidoM('Flores');
    
    echo get_class( $usuario);
    
    
    $parametros['nombre'] = 'Ana Rodriguez Flores';
    $parametros['objeto_usuario'] = $usuario;
    
    return new ViewModel($parametros);
    
   
   // $adapter = new \Zend\Db\Adapter\Adapter(array(
   // 		'driver' => 'Mysqli',
   // 		'host' => '127.0.0.1',
   // 		'database' => 'annie',
   // 		'username' => 'root',
   // 		'password' => '1234',
   // 		'options' => array('buffer_results' => true)
   // ));
    
//     $adapter = $this->getServiceLocator()->get('Zend\Db\Adapter\Adapter');
//     $result = $adapter -> query ( 'SELECT * FROM `alumnos` where `Ncontrol` =11390237' ,  array ());
    
//     echo get_class($result). '</br>';
    
//     $data = $result -> current();
    
//     print_r($data);
    	
//     	$usuario = $this->getServiceLocator()->get('Curso\Service\UsuarioService');
//     	//$usuario = new UsuarioService();
//     	$usuario->setNombre("Annie");
//     	$usuario->setApellidoP("Rodriguez");
//     	$usuario->setApellidoM("Flores");
//     	echo get_class($usuario);
//     	$parametros['nombre'] = 'Annie Rodriguez Flores';
//     	$parametros['objeto_usuario'] = $usuario;
//     	return new ViewModel($parametros);
    	
    
    }
}
