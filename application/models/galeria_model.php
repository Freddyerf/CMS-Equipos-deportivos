<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class galeria_model extends CI_Model{
	
	private $ci;
	
	public function __construct(){
		$this->ci=&get_instance();
		parent::__construct();
	}
	
	
	public function crearGaleria($datos){
		$this->ci->db->insert('galeria',$datos);
	}
}
