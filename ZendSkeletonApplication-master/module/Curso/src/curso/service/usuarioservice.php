<?php

namespace Curso\Service;
use Application\Service\UsuarioInterface;
use Zend\ServiceManager\ServiceManagerAwareInterface;
use Zend\ServiceManager\ServiceManager;

class UsuarioService implements UsuarioInterface,ServiceManagerAwareInterface{  //implements UsuarioInterface
	
	protected $serviceLocator;
	
	protected $nombre;
	protected $apellidoP;
	protected $apellidoM;
	
	public function setServiceManager(ServiceManager $serviceManager){
		$this->sm = $serviceManager;
	}
	
	public function getServiceManager(){
		return $this->sm;
	}
	
	public function testDB(){
		$adapter = $this->getServiceManager()->get('Zend\Db\Adapter\Adapter');
		$result = $adapter -> query ( 'SELECT * FROM `alumnos` where `Nombre` =Carlos' ,  array ());
		
		echo get_class($result). '</br>';
		
		$data = $result -> current();
		
		print_r($data);
	}
	
	function loadById($user_id){
		$adapter = $this->getServiceManager()->get('Zend\Db\Adapter\Adapter');
		$result = $adapter -> query ( 'SELECT * FROM `alumnos` where `Nombre` =Carlos' ,  array ());
		
		$data = $result->current();
		
		if($data !== null){
			$this->hydrator($data);
			return true;
		}
		
		return false;
	}
	
	function hydrator($data){
		$this->setNombre($data->Nombre);
		$this->setApellidoP($data->Ncontrol);
		$this->setApellidoM($data->Nombre);
			
	}
	
	/**
	 * @return the $nombre
	 */
	public function getNombre() {
		return $this->nombre;//,''.$this->apellidoP.''.$this->apellidoM;
	}

	/**
	 * @return the $apellidoP
	 */
	public function getApellidoP() {
		return $this->apellidoP;
	}

	/**
	 * @return the $apellidoM
	 */
	public function getApellidoM() {
		return $this->apellidoM;
	}

	/**
	 * @param field_type $nombre
	 */
	public function setNombre($nombre) {
		$this->nombre = $nombre;
	}

	/**
	 * @param field_type $apellidoP
	 */
	public function setApellidoP($apellidoP) {
		$this->apellidoP = $apellidoP;
	}

	/**
	 * @param field_type $apellidoM
	 */
	public function setApellidoM($apellidoM) {
		$this->apellidoM = $apellidoM;
	}	
}
