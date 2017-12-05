<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	public function autenticar($cedula,$password){
		$this->db->where('cedula',$cedula);
		$this->db->where('password',md5($password));
		$results = $this->db->get('usuarios');
		if($results->num_rows()>0){
			return true;
		}else{
			return false;
		}
	}

}
