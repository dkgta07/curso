<?php

namespace Application\Service;

interface UsuarioInterface {
	public function getNombre();
	public function getApellidoP();
	public function getApellidoM();
	
	public function setNombre($nombre);
	public function setApellidoP($apellidoP);
	public function setApellidoM($apellidoM);
	
}
?>