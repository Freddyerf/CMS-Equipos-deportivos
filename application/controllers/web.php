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

		$start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$total = $this->web_model->numeroEventos();

		$this->config->load('pagination', TRUE);
		$settings = $this->config->item('pagination');

		$settings['base_url'] = base_url('web/eventos');
		$settings['total_rows'] = $total;
		$settings['per_page'] = 5;


		$datos['eventos']=$this->web_model->buscarEventos($settings['per_page'], $start_index);

		$this->pagination->initialize($settings);

		$datos['links']=$this->pagination->create_links();

		$this->load->view('plantilla/encabezado');
		$this->load->view('eventos_view',$datos);
		$this->load->view('plantilla/pie');
	}

	public function asistirEvento($asistir=0,$evento=0){
		if($asistir>0){
			$this->web_model->asistirEvento($asistir,$evento);
			redirect('web/eventos');
		}
	}

	public function verAsistirEvento($evento=0){
		if(!empty($this->web_model->usuariosAsistirEvento($evento))){
			$datos['evento'] = $evento;
			$datos['titulo'] = $this->web_model->getNombreEvento($evento);
			$this->load->view('plantilla/encabezado');
			$this->load->view('ver_asistir_evento_view',$datos);
			$this->load->view('plantilla/pie');
		}else {
			redirect('web/eventos');
		}
	}

	public function miembros(){
		if(!$this->session->userdata('cedula')){ //SI NO ESTÁ LOGUEADO
			redirect('login');
		}else{
			$this->load->view('plantilla/encabezado');
			$this->load->view('miembros_view');
			$this->load->view('plantilla/pie');
		}
	}

	public function galeria(){
		$this->load->view('plantilla/encabezado');
		$this->load->view('galeria_view');
		$this->load->view('plantilla/pie');
	}

	public function clasificados(){
		$start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$total = $this->web_model->numeroClasificados();

		$this->config->load('pagination', TRUE);
		$settings = $this->config->item('pagination');

		$settings['base_url'] = base_url('web/clasificados');
		$settings['total_rows'] = $total;
		$settings['per_page'] = 5;


		$datos['clasificados']=$this->web_model->buscarClasificados($settings['per_page'], $start_index);

		$this->pagination->initialize($settings);

		$datos['links']=$this->pagination->create_links();

		$this->load->view('plantilla/encabezado');
		$this->load->view('clasificados_view',$datos);
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
		if(isset($_POST['publicar'])){
			$this->web_model->guardarComentario($_POST['newComentario'],$_POST['txid']);
		}
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
						$nombrefoto=$id.$foto;
						$this->web_model->guardarClasificado($titulo,$descripcion,$nombrefoto,$fecha,$usuario,$contacto);
						move_uploaded_file($_FILES['foto']['tmp_name'], "images/clasificados/{$nombrefoto}");
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
