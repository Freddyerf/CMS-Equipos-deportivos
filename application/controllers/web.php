<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('web_model');
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
		if(!$this->session->userdata('cedula')){ //SI NO ESTÁ LOGUEADO
			redirect('login');
		}else{

			if($_POST){
				var_dump($_POST);
				$id = $_POST['id'];
				$titulo = $_POST['titulo'];
				$usuario = $_POST['usuario'];
				$contacto = $_POST['contacto'];
				$fecha = $_POST['fecha'];
				$descripcion = $_POST['descripcion'];
				$foto = $_FILES['foto']['name'];

				if($foto!=''){ // SI SE SUBIÓ UNA FOTO
					if($_FILES['foto']['error']==0){ //SI NO HAY ERRORES
						$this->web_model->guardarClasificado($titulo,$descripcion,$foto,$fecha,$usuario,$contacto);
						redirect('web/clasificados');
					}
				}else{ // SI NO SE SUBIÓ UNA FOTO
					$this->web_model->guardarClasificado($titulo,$descripcion,$foto,$fecha,$usuario,$contacto);
					redirect('web/clasificados');
				}
			}

			$this->load->view('plantilla/encabezado');
			$this->load->view('crear_clasificados_view');
			$this->load->view('plantilla/pie');
		}

	}

}
