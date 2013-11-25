<?php

namespace Application\Service;

class UsuarioService implements UsuarioInterface{
	
	protected $nombre;
	protected $apellidoP;
	protected $apellidoM;
	/**
	 * @return the $nombre
	 */
	public function getNombre() {
		return $this->nombre;
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
