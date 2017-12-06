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
		$config['base_url'] = base_url('index.php/Galeria/index');
		//$config['base_url'] = 'http://example.com/index.php/test/page/';	
		$config['total_rows'] = 200;
		$config['per_page'] = 10;
		
		$cantidad=$this->uri->segment_array()[count($this->uri->segment_array())];
		$this->pagination->initialize($config);
		
		$datos['creados']=$this->pagination->create_links();
		
		$this->load->view('plantilla/encabezado');
		$this->load->view('galeriaMain_view',$datos);
		$this->load->view('plantilla/pie');
	}
	
	public function crearGaleria(){

		$this->load->view('plantilla/encabezado');
		$this->load->view('addGaleria_view',$datos);
		$this->load->view('plantilla/pie');
	}
	
	public function procesoCrearGaleria(){
		
	}
}
