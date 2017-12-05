<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller{

	public function __construct(){
		parent::__construct();
	}

	function index(){
		if(!$this->session->userdata('cedula') ){
			redirect('login');
		}else{
		$this->load->view('plantilla/encabezado');
		$this->load->view('inicio_view');
		$this->load->view('plantilla/pie');
		}
	}
}
