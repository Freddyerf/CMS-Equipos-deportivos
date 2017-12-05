<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

	public function __construct(){
		parent::__construct();

	}

	public function index(){

		if($this->session->userdata('cedula') ){
			redirect('web');
		}else{

			if(isset($_POST['user_password']) && isset($_POST['user_cedula'])){

			$this->load->model('usuario_model');

			if($this->usuario_model->autenticar( $_POST['user_cedula'], $_POST['user_password'] ) ){
				$this->session->set_userdata('cedula', $_POST['user_cedula']);

				$results = $this->db->query("SELECT * from usuarios WHERE cedula='{$_POST['user_cedula']}'")->result_array();
				$this->session->set_userdata('id_usuario', $results[0]['id_usuario']);
				redirect('web');
			}else{
				redirect('login');
			}
		}

    $this->load->view('plantilla/encabezado');
    $this->load->view('login_view');
    $this->load->view('plantilla/pie');
		}

	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}

}
