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

	public function getNumGalerias(){
    $query = $this->db->query("SELECT count(*) FROM galerias")->result_array();
    return intval($query[0]['count(*)']);
	}

}
