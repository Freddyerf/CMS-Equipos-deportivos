<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class galeria_model extends CI_Model{

	public function __construct(){
		parent::__construct();
	}


	public function crearGaleria($datos){
		$this->db->insert('galerias',$datos);
	}

	public function buscarGalerias($porpag,$index){
		$this->db->limit($porpag,$index);
		$result=$this->db->get('galerias')->result();
		return $result;
	}

	public function buscarGaleria($id){
		$this->db->where('id',$id);
		$result=$this->db->get('galerias')->result();
		return $result[0];
	}

	public function eliminarGaleria($id){
		$this->db->where('id',$id);
		$this->db->delete('galerias');
	}

	public function numeroRegistros(){
		$this->db->select('count(id) as resultado');
		return $this->db->get('galerias')->result()[0]->resultado;
	}
}
