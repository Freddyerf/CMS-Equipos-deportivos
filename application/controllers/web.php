<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('web_model');
		$this->load->library('pagination');
	}

	function index(){
		$this->load->view('plantilla/encabezado');

		$this->load->view('inicio_view');

		$this->load->view('plantilla/pie');
	}

	public function noticias(){

		$start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$total = $this->web_model->numeroNoticias();

		$this->config->load('pagination', TRUE);
		$settings = $this->config->item('pagination');

		$settings['base_url'] = base_url('web/noticias');
		$settings['total_rows'] = $total;
		$settings['per_page'] = 5;


		$datos['noticias']=$this->web_model->buscarNoticias($settings['per_page'], $start_index);

		$this->pagination->initialize($settings);

		$datos['links']=$this->pagination->create_links();


		$this->load->view('plantilla/encabezado');
		$this->load->view('noticias_view',$datos);
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
						move_uploaded_file($_FILES['foto']['tmp_name'], "images/clasificados/{$id}{$foto}");
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
