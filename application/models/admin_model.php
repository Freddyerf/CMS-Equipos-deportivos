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
    $sql = "SELECT * FROM noticias WHERE id_noticia = ?";
    $query = $this->db->query($sql, $id)->result_array();

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
  * MÉTODOS DE EVENTOS
  *
  */
  public function guardarEvento($titulo,$fecha,$hora,$foto,$cuerpo){
    $sql = "INSERT INTO eventos(titulo,fecha,hora,foto,cuerpo) values(?, ?, ?, ?, ?)";
    $this->db->query($sql, array($titulo,$fecha,$hora,$foto,$cuerpo));

  }

  public function mostrarEventos(){
    $this->db->select('id_evento,titulo,fecha,hora,foto');
    $query = $this->db->get('eventos')->result();

    return $query;
  }

  public function getEvento($id){
    $sql = "SELECT * FROM eventos WHERE id_evento = ?";
    $query = $this->db->query($sql, $id)->result_array();

    return $query;
  }

  public function editarEvento($id,$titulo,$fecha,$hora,$foto,$cuerpo){
    if($foto==''){ //si no añadió una foto
      $sql = "UPDATE eventos SET titulo = ?, fecha = ?, hora = ?, cuerpo = ? WHERE id_evento = ?";
      $array = array($titulo,$fecha,$hora,$cuerpo,$id);
    }else{
      $sql = "UPDATE eventos SET titulo = ?, fecha = ?, hora = ?, foto = ?, cuerpo = ? WHERE id_evento = ?";
      $array = array($titulo,$fecha,$hora,$foto,$cuerpo,$id);
    }
      $this->db->query($sql, $array);
  }

  public function eliminarEvento($id){
    $sql = "DELETE FROM eventos WHERE id_evento = ?";
    $this->db->query($sql, $id);
  }


  /*
  *
  * MÉTODOS DE CONTACTO
  *
  */
  public function mostrarContactos(){
    $this->db->select('id_contacto,nombre,correo,mensaje');
    $query = $this->db->get('contactos')->result();

    return $query;
  }

  public function eliminarContacto($id){
    $sql = "DELETE FROM contactos WHERE id_contacto = ?";
    $this->db->query($sql, $id);
  }


  /*
  *
  * MÉTODOS DE MIEMBROS
  *
  */
  public function mostrarMiembros(){
    $this->db->select('id_usuario,nombre,telefono,correo,latitud,longitud');
    $query = $this->db->get('usuarios')->result();

    return $query;
  }

  public function mostrarUsuarios(){
    $this->db->select('id_usuario,nombre,telefono,correo,admin');
    $query = $this->db->get('usuarios')->result();

    return $query;
  }

  public function ponerPriv($id){
    $sql = "UPDATE usuarios SET admin = 1 WHERE id_usuario = ?";
    $this->db->query($sql, $id);

  }

  public function quitarPriv($id){
    $sql = "UPDATE usuarios SET admin = 0 WHERE id_usuario = ?";
    $this->db->query($sql, $id);

  }

  public function getlatMiembros(){
    $sql = "SELECT latitud from usuarios";
    $query = $this->db->query($sql)->result_array();

    return $query;
  }

  public function getlonMiembros(){
    $sql = "SELECT longitud from usuarios";
    $query = $this->db->query($sql)->result_array();

    return $query;
  }

  public function getcoordMiembros(){
    $sql = "SELECT latitud,longitud from usuarios";
    $query = $this->db->query($sql)->result_array();

    return $query;
  }

  /*
  *
  * MÉTODOS DE FAQ
  *
  */
  public function mostrarFAQ(){
    $this->db->select('id_faq,pregunta,respuesta');
    $query = $this->db->get('faq')->result();

    return $query;
  }

  public function getFAQ($id){
    $sql = "SELECT * FROM faq WHERE id_faq = ?";
    $query = $this->db->query($sql, $id)->result_array();

    return $query;
  }

  public function guardarFAQ($pregunta,$respuesta){
    $sql = "INSERT INTO faq(pregunta, respuesta) values(?, ?)";
    $this->db->query($sql, array($pregunta,$respuesta));

  }

  public function editarFAQ($id,$pregunta,$respuesta){
      $sql = "UPDATE faq SET pregunta = ?, respuesta = ? WHERE id_faq = ?";
      $array = array($pregunta,$respuesta,$id);
      $this->db->query($sql, $array);
  }

  public function eliminarFAQ($id){
    $sql = "DELETE FROM faq WHERE id_faq = ?";
    $this->db->query($sql, $id);
  }


  public function activarClasificados($id){
    $sql = "UPDATE clasificados SET estado = 1 WHERE id_clasificado = ?";
    $this->db->query($sql, $id);
  }

  public function desactivarClasificados($id){
    $sql = "UPDATE clasificados SET estado = 0 WHERE id_clasificado = ?";
    $this->db->query($sql, $id);
  }

  public function getEstadoClasificado($id){
    $sql = "SELECT estado FROM clasificados WHERE id_clasificado = ?";
    $query = $this->db->query($sql,$id)->result_array()[0]['estado'];

    return $query;
  }

  public function mostrarTodosClasificados(){
    $this->db->select('id_clasificado,titulo,descripcion');
    $query = $this->db->get('clasificados')->result();

    return $query;
  }

}
