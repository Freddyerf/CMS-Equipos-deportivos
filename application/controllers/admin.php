<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

  public function __construct()
  {
    parent::__construct();

  }

  function index()
  {
    $this->load->view('admin/plantilla/encabezado_adm');
    echo "este es el inicio del admin";
    $this->load->view('admin/plantilla/pie_adm');
  }

  public function noticias(){
    $this->load->view('admin/plantilla/encabezado_adm');
    $this->load->view('admin/noticias_adm_view');
    $this->load->view('admin/plantilla/pie_adm');
  }

  public function eventos(){
    $this->load->view('admin/plantilla/encabezado_adm');
    $this->load->view('admin/eventos_adm_view');
    $this->load->view('admin/plantilla/pie_adm');
  }

  public function miembros(){
    $this->load->view('admin/plantilla/encabezado_adm');
    $this->load->view('admin/miembros_adm_view');
    $this->load->view('admin/plantilla/pie_adm');
  }

  public function galeria(){
    $this->load->view('admin/plantilla/encabezado_adm');
    $this->load->view('admin/galeria_adm_view');
    $this->load->view('admin/plantilla/pie_adm');
  }

  public function clasificados(){
    $this->load->view('admin/plantilla/encabezado_adm');
    $this->load->view('admin/clasificados_adm_view');
    $this->load->view('admin/plantilla/pie_adm');
  }

  public function contacto(){
    $this->load->view('admin/plantilla/encabezado_adm');
    $this->load->view('admin/contacto_adm_view');
    $this->load->view('admin/plantilla/pie_adm');
  }

  public function faq(){
    $this->load->view('admin/plantilla/encabezado_adm');
    $this->load->view('admin/faq_adm_view');
    $this->load->view('admin/plantilla/pie_adm');
  }

  public function administradores(){
    $this->load->view('admin/plantilla/encabezado_adm');
    $this->load->view('admin/admin_adm_view');
    $this->load->view('admin/plantilla/pie_adm');
  }

  public function parametros(){
    $this->load->view('admin/plantilla/encabezado_adm');
    $this->load->view('admin/parametros_adm_view');
    $this->load->view('admin/plantilla/pie_adm');
  }

}
