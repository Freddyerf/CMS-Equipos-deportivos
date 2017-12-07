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
	
	public function buscarGalerias($id){
		$this->ci->db->limit(10,$id);
		$result=$this->ci->db->get('galeria')->result();
		return $result;
	}
	
	public function buscarGaleria($id){
		$this->ci->db->where('id',$id);
		$result=$this->ci->db->get('galeria')->result();
		return $result[0];
	}
	
	public function eliminarGaleria($id){
		$this->ci->db->where('id',$id);
		$this->ci->db->delete('galeria');
	}
	
	public function numeroRegistros(){
		$this->ci->db->select('count(id) as resultado');
		return $this->ci->db->get('galeria')->result()[0]->resultado;
	}
}
