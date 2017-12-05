<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller{

	public function __construct(){
		parent::__construct();
	}

	function index(){
		$this->load->view('plantilla/encabezado');

		if($this->session->userdata('admin') == 1 ){
			redirect('admin');
		}else{
		$this->load->view('inicio_view');
		}

		$this->load->view('plantilla/pie');
	}

	public function noticias(){
		$this->load->view('plantilla/encabezado');
		$this->load->view('noticias_view');
		$this->load->view('plantilla/pie');
	}

	public function eventos(){
		$this->load->view('plantilla/encabezado');
		$this->load->view('eventos_view');
		$this->load->view('plantilla/pie');
	}

	public function miembros(){
		$this->load->view('plantilla/encabezado');
		$this->load->view('miembros_view');
		$this->load->view('plantilla/pie');
	}

	public function galeria(){
		$this->load->view('plantilla/encabezado');
		$this->load->view('galeria_view');
		$this->load->view('plantilla/pie');
	}

	public function clasificados(){
		$this->load->view('plantilla/encabezado');
		$this->load->view('clasificados_view');
		$this->load->view('plantilla/pie');
	}

	public function contacto(){
		$this->load->view('plantilla/encabezado');
		$this->load->view('contacto_view');
		$this->load->view('plantilla/pie');
	}

	public function faq(){
		$this->load->view('plantilla/encabezado');
		$this->load->view('faq_view');
		$this->load->view('plantilla/pie');
	}

}
