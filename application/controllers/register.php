<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller{

	public function __construct(){
		parent::__construct();

	}

	public function index(){
    if(isset($_POST['user_cedula'])){

			$this->load->model('registro_model');
			if($this->registro_model->verificarPass($_POST['user_password'],$_POST['user_password1'])){
				if($this->registro_model->verificarCorreo($_POST['user_email'])){

          if($this->registro_model->verificarCedula($_POST['user_cedula'])){
            $ced = $_POST['user_cedula'];
						$pass = $_POST['user_password'];
            $name = $_POST['user_name'];
            $apell = $_POST['user_apellido'];
            $tel = $_POST['user_tel'];
            $email = $_POST['user_email'];
            $direc = $_POST['user_direccion'];
            $lat = $_POST['user_latitud'];
            $long = $_POST['user_longitud'];

            $this->registro_model->registrar($ced,$name,$apell,$tel,$email,$direc,$lat,$long,$pass);
    				redirect('login');

          }else{
  					echo "<script>alert('¡Cédula errónea o no disponible!')</script>";
  				}

				}else{
					echo "<script>alert('¡Correo electrónico no disponible!')</script>";
				}
			}else {
				echo "<script>alert('¡Las contraseñas no coinciden!')</script>";
			}

    }
      $this->load->view('plantilla/encabezado');
      $this->load->view('register_view');
      $this->load->view('plantilla/pie');

	}


}
