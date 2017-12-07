<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro_model extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	public function registrar($cedula,$nombre,$apellido,$tel,$email,$direccion,$lat,$long,$pass){
    $sql = "INSERT INTO usuarios(cedula,nombre,apellido,telefono,correo,direccion,latitud,longitud,password) values(?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$this->db->query($sql,array($cedula, $nombre, $apellido, $tel, $email, $direccion, $lat, $long,md5($pass)));

	}

  public function verificarCorreo($email){
		$rs = true;
		//verificar que no exista otro correo
		$this->db->where('correo',$email);
		$results = $this->db->get('usuarios');
		if($results->num_rows()>0){
			$rs = false;
		}else{
			$rs = true;
		}

		return $rs;
	}

		public function verificarPass($pass1,$pass2){
	 		$rs = false;
	 		//verificar que coincidan las contraseñas
	 		if($pass1 == $pass2){
	 			$rs = true;
	 		}else{
	 			$rs = false;
	 		}
	 		return $rs;
 		}

    public function verificarCedula($cedula){
      $rs = true;
      //verificar que no exista otro correo
      $this->db->where('cedula',$cedula);
      $results = $this->db->get('usuarios');
      if($results->num_rows()>0){
        $rs = false;
      }else{
        $rs = true;
      }

		return $rs;
	}

}
