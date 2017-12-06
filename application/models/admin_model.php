<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();

  }

/*
*
* MÉTODOS DE NOTICIAS
*
*/
  public function guardarNoticia($titulo,$resumen,$foto,$cuerpo){
    $sql = "INSERT INTO noticias(titulo,resumen,foto,cuerpo) values(?, ?, ?, ?)";
		$this->db->query($sql, array($titulo,$resumen,$foto,$cuerpo));

  }

  public function mostrarNoticias(){
    $this->db->select('id_noticia,titulo,foto');
    $query = $this->db->get('noticias')->result();

    return $query;
  }

  public function getNoticia($id){
    $query = $this->db->get('noticias')->result_array();

    return $query;
  }

  public function editarNoticia($id,$titulo,$resumen,$foto,$cuerpo){
    if($foto==''){ //si no añadió una foto
      $sql = "UPDATE noticias SET titulo = ?, resumen = ?, cuerpo = ? WHERE id_noticia = ?";
  		$array = array($titulo,$resumen,$cuerpo,$id);
    }else{
      $sql = "UPDATE noticias SET titulo = ?, resumen = ?, foto = ?, cuerpo = ? WHERE id_noticia = ?";
  		$array = array($titulo,$resumen,$foto,$cuerpo,$id);
    }
      $this->db->query($sql, $array);
  }

  public function eliminarNoticia($id){
    $sql = "DELETE FROM noticias WHERE id_noticia = ?";
		$this->db->query($sql, $id);
  }
  /*
  *
  * FIN MÉTODOS DE NOTICIAS
  *
  */



  /*
  *
  * MÉTODOS DE EVENTOS
  *
  */
  public function guardarEvento($titulo,$fecha,$hora,$foto,$cuerpo){
    $sql = "INSERT INTO eventos(titulo,fecha,hora,foto,cuerpo) values(?, ?, ?, ?, ?)";
    $this->db->query($sql, array($titulo,$fecha,$hora,$foto,$cuerpo));

  }
  /*
  *
  * FIN MÉTODOS DE EVENTOS
  *
  */


}
