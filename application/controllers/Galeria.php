<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeria extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('galeria_model');
		$this->load->library('pagination');
	}

	public function index()
	{
		$start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$total = $this->galeria_model->numeroRegistros();

		$this->config->load('pagination', TRUE);
		$settings = $this->config->item('pagination');

		$settings['base_url'] = base_url('Galeria/index');
		$settings['total_rows'] = 5;
		$settings['per_page'] = 1;


		$datos['galerias']=$this->galeria_model->buscarGalerias($settings['per_page'], $start_index);

		$this->pagination->initialize($settings);

		$datos['links']=$this->pagination->create_links();

		$this->load->view('plantilla/encabezado');
		$this->load->view('galeriaMain_view',$datos);
		$this->load->view('plantilla/pie');
	}

	public function crearGaleria(){

		$this->load->view('plantilla/encabezado');
		$this->load->view('addGaleria_view');
		$this->load->view('plantilla/pie');
	}

	public function procesoCrearGaleria(){
		if(!$_POST){
			redirect('galeria/crearGaleria');
		}

		$carpeta=time();

		$galeria['nombre']=$this->input->post('txtitulo');
		$galeria['descripcion']=$this->input->post('txdescripcion');
		$galeria['nombreCarpeta']=$carpeta;
		$this->input->post('flimagenes');


		mkdir('images/galeria/'.$carpeta);

		$config['upload_path']          = 'images/galeria/'.$carpeta;
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 1000;
		$config['max_width']            = 2000;
		$config['max_height']           = 2000;

		$this->load->library('upload', $config);
		$files=$_FILES;
		for($i=0;$i<count($files['flimagenes']['name']);$i++){

			$_FILES['flimagenes']['name']=$files['flimagenes']['name'][$i];
			$_FILES['flimagenes']['type']=$files['flimagenes']['type'][$i];
			$_FILES['flimagenes']['tmp_name']=$files['flimagenes']['tmp_name'][$i];
			$_FILES['flimagenes']['error']=$files['flimagenes']['error'][$i];
			$_FILES['flimagenes']['size']=$files['flimagenes']['size'][$i];

			$this->upload->initialize($config);

			if ( ! $this->upload->do_upload('flimagenes'))
			{
					$error = array('error' => $this->upload->display_errors());
			}
			else
			{
					$data = array('upload_data' => $this->upload->data());

			}
		}
		if(!isset($error))$this->galeria_model->crearGaleria($galeria);
		//var_dump($error);
		echo"
		<script>
			window.location='".base_url()."Galeria';
		</script>
		";

	}

	public function galeria(){
		if(!$_GET){
			redirect('galeria');
		}
		if(isset($_GET['id'])){
			$galeria=$this->galeria_model->buscarGaleria($_GET['id']);
			if($galeria==null){
				redirect('galeria');
			}
			$datos['galeria']=$galeria;

			$this->load->view('plantilla/encabezado');
			$this->load->view('galeria_view',$datos);
			$this->load->view('plantilla/pie');
		}else if(isset($_GET['editar'])){
			$galeria=$this->galeria_model->buscarGaleria($_GET['editar']);
			if($galeria==null){
				redirect('galeria');
			}
			$datos['galeria']=$galeria;

			$this->load->view('plantilla/encabezado');
			$this->load->view('addGaleria_view',$datos);
			$this->load->view('plantilla/pie');
		}
		else if(isset($_GET['eliminar'])){
			$galeria=$this->galeria_model->eliminarGaleria($_GET['eliminar']);
			redirect('galeria');
		}
	}
}
