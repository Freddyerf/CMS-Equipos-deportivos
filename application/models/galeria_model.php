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
<<<<<<< HEAD

	public function getNumGalerias(){
    $query = $this->db->query("SELECT count(*) FROM galerias")->result_array();
    return intval($query[0]['count(*)']);
	}

=======
	
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
>>>>>>> 41999a2d4b646e8572266e5cc303086985baca94
}
