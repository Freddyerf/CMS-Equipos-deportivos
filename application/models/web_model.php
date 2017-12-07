<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();

  }

  public function mostrarNoticias(){
    $this->db->select('id_noticia,titulo,resumen,foto');
    $query = $this->db->get('noticias')->result();

    return $query;
  }

  public function mostrarEventos(){
    $this->db->select('id_evento,titulo,fecha,hora,foto,cuerpo');
    $query = $this->db->get('eventos')->result();

    return $query;
  }

  public function guardarContacto($nombre,$correo,$mensaje){
    $sql = "INSERT INTO contactos(nombre,correo,mensaje) values(?, ?, ?)";
    $this->db->query($sql, array($nombre,$correo,$mensaje));
  }

}
