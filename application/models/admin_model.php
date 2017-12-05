<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();

  }

  public function guardarNoticia($titulo,$resumen,$foto,$cuerpo){
    $sql = "INSERT INTO noticias(titulo,resumen,foto,cuerpo) values(?, ?, ?, ?)";
		$this->db->query($sql, array($titulo,$resumen,$foto,$cuerpo));

  }

  public function guardarEvento($titulo,$fecha,$hora,$foto,$cuerpo){
    $sql = "INSERT INTO eventos(titulo,fecha,hora,foto,cuerpo) values(?, ?, ?, ?, ?)";
    $this->db->query($sql, array($titulo,$fecha,$hora,$foto,$cuerpo));

  }

  public function mostrarNoticias(){

  }

}
