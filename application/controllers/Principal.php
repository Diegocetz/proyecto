<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	
	public function index()
	{
		$datos['nombre']="<h1>Diego Yahir Cetz Dominguez</h1>";
		$datos['pie']="<h4>Derechos Reservados</h4>";
		$this->load->view('secciones/header');
		$this->load->view('principal',$datos);
		$this->load->view('secciones/footer' ,$datos);
	}


public function catalogos(){

	$this->load->view('secciones/header');
	$this->load->view('secciones/footer');
}
}