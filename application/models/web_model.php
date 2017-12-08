<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();

  }

  public function mostrarNoticias(){
    $this->db->select('id_noticia,titulo,resumen,foto');
    $this->db->order_by('id_noticia', 'desc');
    $query = $this->db->get('noticias')->result();

    return $query;
  }

  public function buscarNoticias($porpag,$index){
    $this->db->limit($porpag,$index);
    $this->db->order_by('id_noticia', 'desc');
    $result=$this->db->get('noticias')->result();
    return $result;
  }

  public function numeroNoticias(){
    $this->db->select('count(*) as resultado');
    return $this->db->get('noticias')->result()[0]->resultado;
  }


  public function getNoticia($id){
    $sql = "SELECT * FROM noticias WHERE id_noticia = ?";
    $query = $this->db->query($sql, $id)->result_array();

    return $query;
  }

  public function getComentarios($id){
    $sql = "SELECT comentario FROM comentarios WHERE id_noticia = ?";
    $query = $this->db->query($sql, $id)->result_array();

    return $query;
  }

  public function mostrarEventos(){
    $this->db->select('id_evento,titulo,fecha,hora,foto,cuerpo');
    $this->db->order_by('id_evento', 'desc');
    $query = $this->db->get('eventos')->result();

    return $query;
  }

  public function numeroEventos(){
    $this->db->select('count(*) as resultado');
    return $this->db->get('eventos')->result()[0]->resultado;
  }

  public function buscarEventos($porpag,$index){
    $this->db->limit($porpag,$index);
    $this->db->order_by('id_evento', 'desc');
    $result=$this->db->get('eventos')->result();
    return $result;
  }

  public function getNombreEvento($id){
    $sql = "SELECT titulo FROM eventos WHERE id_evento = ?";
    $query = $this->db->query($sql, $id)->result()[0]->titulo;

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
    $sql = "SELECT id_clasificado,titulo,descripcion,fecha,usuario,contacto FROM clasificados WHERE estado = 1";
    $query = $this->db->query($sql)->result();

    return $query;
  }

  public function getClasificado($id){
    $sql = "SELECT * FROM clasificados WHERE id_clasificado = ?";
    $query = $this->db->query($sql, $id)->result_array();

    return $query;
  }

  public function guardarClasificado($titulo,$descripcion,$imagenes,$fecha,$usuario,$contacto){
    $sql = "INSERT INTO clasificados(titulo,descripcion,imagenes,fecha,usuario,contacto) values(?, ?, ?, ?, ?, ?)";
    $this->db->query($sql, array($titulo,$descripcion,$imagenes,$fecha,$usuario,$contacto));

  }

  public function getUsuario($cedula){
    $sql = "SELECT * FROM usuarios WHERE cedula = ?";
    $query = $this->db->query($sql, $cedula)->result_array();

    return $query;
  }

  public function numAsistirEvento($id){
    $sql = "SELECT count(*) as resultado FROM asistir_evento WHERE id_evento = ?";
    $query = $this->db->query($sql, $id)->result()[0]->resultado;

    return $query;
  }

  public function usuariosAsistirEvento($id){
    $sql = "SELECT DISTINCT usuarios.nombre, usuarios.apellido, usuarios.telefono, usuarios.correo
              FROM asistir_evento
                INNER JOIN usuarios
                  ON asistir_evento.id_usuario = usuarios.id_usuario
                    WHERE asistir_evento.id_evento = ?";
    $query = $this->db->query($sql, $id)->result_array();

    return $query;
  }

  public function asistirEvento($id_usuario,$id_evento){
    if(!empty($this->asisteEvento($id_usuario,$id_evento))){
      $sql = "DELETE FROM asistir_evento WHERE id_usuario = ? AND id_evento = ?";
    }else {
      $sql = "INSERT INTO asistir_evento(id_usuario,id_evento) values(?, ?)";
    }
    $this->db->query($sql, array($id_usuario,$id_evento));
  }

  public function asisteEvento($id_usuario,$id_evento){
    $sql = "SELECT id_asistir_evento as resultado FROM asistir_evento WHERE id_usuario = ? AND id_evento = ?";
    $query = $this->db->query($sql, array($id_usuario,$id_evento))->result_array();

    return $query;
  }


  public function getIdByCedula($cedula){
    $sql = "SELECT id_usuario as resultado FROM usuarios WHERE cedula = ?";
    $query = $this->db->query($sql, $cedula)->result()[0]->resultado;
    return $query;
  }

  public function mostrarMiembros(){
    $this->db->select('nombre,telefono,correo');
    $query = $this->db->get('usuarios')->result();

    return $query;
  }

  public function guardarComentario($comentario,$id){
    $sql = "INSERT INTO comentarios(comentario,id_noticia) values(?, ?)";
    $this->db->query($sql, array($comentario,$id));
  }

}
