<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller{

	public function __construct(){
		parent::__construct();
	}

	function index(){
		$this->load->view('plantilla/encabezado');

		$this->load->view('inicio_view');

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
		if($_POST){
			$this->load->model('web_model');
			$this->web_model->guardarContacto($_POST['name'],$_POST['email'],$_POST['message']);
			redirect('web/contacto');
		}
		$this->load->view('plantilla/encabezado');
		$this->load->view('contacto_view');
		$this->load->view('plantilla/pie');
	}

	public function faq(){
		$this->load->view('plantilla/encabezado');
		$this->load->view('faq_view');
		$this->load->view('plantilla/pie');
	}

	public function verNoticias(){
		$this->load->view('plantilla/encabezado');
		$this->load->view('ver_noticia_view');
		$this->load->view('plantilla/pie');
	}

	public function verClasificados(){
		$this->load->view('plantilla/encabezado');
		$this->load->view('ver_clasificados_view');
		$this->load->view('plantilla/pie');
	}

	public function crearClasificados(){
		$this->load->view('plantilla/encabezado');
		$this->load->view('crear_clasificados_view');
		$this->load->view('plantilla/pie');
	}

}
