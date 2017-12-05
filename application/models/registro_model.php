<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro_model extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	public function registrar($cedula,$nombre,$apellido,$tel,$email,$direccion,$lat,$long){
    $sql = "INSERT INTO usuarios(cedula,nombre,apellido,telefono,correo,direccion,latitud,longitud) values(?, ?, ?, ?, ?, ?, ?, ?)";
		$this->db->query($sql,array($cedula, $nombre, $apellido, $tel, $email, $direccion, $lat, $long));

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
