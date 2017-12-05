<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro_model extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	public function registrar($email,$password,$cedula,$nombre,$apellido,$tel,$direccion,$lat,$long){
		$password = md5($password);
    $sql = "INSERT INTO usuarios(correo,password,cedula,nombre,apellido,telefono,direccion,latitud,longitud)"
            ." values('{$email}', '{$password}', '{$cedula}', '{$nombre}', '{$apellido}', '{$tel}', '{$direccion}', '{$lat}', '{$long}')";
		$this->db->query($sql);

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
