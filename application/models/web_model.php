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

  public function getNoticia($id){
    $sql = "SELECT * FROM noticias WHERE id_noticia = ?";
    $query = $this->db->query($sql, $id)->result_array();

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

  public function mostrarFAQ(){
    $this->db->select('id_faq,pregunta,respuesta');
    $query = $this->db->get('faq')->result();

    return $query;
  }

  public function mostrarClasificados(){
    $this->db->select('id_clasificado,titulo,descripcion,fecha,usuario,contacto');
    $query = $this->db->get('clasificados')->result();

    return $query;
  }

}
