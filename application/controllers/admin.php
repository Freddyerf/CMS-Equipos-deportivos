<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Admin extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin_model');
  }

  function index(){
    if(!$this->session->userdata('admin') ){ // SI NO ESTÁ LOGUEADO
      redirect('web');
    }else{
      redirect('admin/noticias');
    }
  }

  public function noticias($id=0){
    if(isset($_POST['publicar'])){
      $id = $_POST['id'];
      $titulo = $_POST['titulo'];
      $resumen = $_POST['resumen'];
      $texto = $_POST['texto'];
      $foto = $_FILES['foto']['name'];

      if($id==0){ //SE SE ESTÁ CREANDO
        if($foto!=''){ // SI SE SUBIÓ UNA FOTO
          if($_FILES['foto']['error']==0){ //SI NO HAY ERRORES
            $nombrefoto=$id.$foto;
            $this->admin_model->guardarNoticia($titulo,$resumen,$nombrefoto,$texto);
            move_uploaded_file($_FILES['foto']['tmp_name'], "images/noticias/{$nombrefoto}");
            redirect('admin/noticias');
          }
        }else{ // SI NO SE SUBIÓ UNA FOTO
          $this->admin_model->guardarNoticia($titulo,$resumen,$foto,$texto);
          redirect('admin/noticias');
        }

      }else if($id>0){ //SE ESTÁ EDITANDO
        if($foto!=''){ // SI SE SUBIÓ UNA FOTO
          if($_FILES['foto']['error']==0){ //SI NO HAY ERRORES
            $nombrefoto=$id.$foto;
            $this->admin_model->editarNoticia($id,$titulo,$resumen,$nombrefoto,$texto);
            move_uploaded_file($_FILES['foto']['tmp_name'], "images/noticias/{$nombrefoto}");
            redirect('admin/noticias');
          }
        }else{ // SI NO SE SUBIÓ UNA FOTO
          $this->admin_model->editarNoticia($id,$titulo,$resumen,$foto,$texto);
          redirect('admin/noticias');
        }
      }

    }else if(isset($_POST['nuevo'])){
      redirect('admin/noticias');
    }

    if(!$this->session->userdata('admin') ){ // SI NO ESTÁ LOGUEADO
      redirect('web');
    }else{
    $this->load->view('admin/plantilla/encabezado_adm');
    $this->load->view('admin/noticias_adm_view');
    $this->load->view('admin/plantilla/pie_adm');
    }
  }

  public function eventos($id=0){
    if(isset($_POST['publicar'])){
      $id = $_POST['id'];
      $titulo = $_POST['titulo'];
      $fecha = $_POST['fecha'];
      $hora = $_POST['hora'];
      $descripcion = $_POST['descripcion'];
      $foto = $_FILES['foto']['name'];

      if($id==0){ //SE SE ESTÁ CREANDO
        if($foto!=''){ // SI SE SUBIÓ UNA FOTO
          if($_FILES['foto']['error']==0){ //SI NO HAY ERRORES
            $nombrefoto=$id.$foto;
            $this->admin_model->guardarEvento($titulo,$fecha,$hora,$nombrefoto,$descripcion);
            move_uploaded_file($_FILES['foto']['tmp_name'], "images/eventos/{$nombrefoto}");
            redirect('admin/eventos');
          }
        }else {
          $this->admin_model->guardarEvento($titulo,$fecha,$hora,$foto,$descripcion);
          redirect('admin/eventos');
        }
      }
      else if($id>0){ //SE ESTÁ EDITANDO
        if($foto!=''){ // SI SE SUBIÓ UNA FOTO
          if($_FILES['foto']['error']==0){ //SI NO HAY ERRORES
            $nombrefoto=$id.$foto;
            $this->admin_model->editarEvento($id,$titulo,$fecha,$hora,$nombrefoto,$descripcion);
            move_uploaded_file($_FILES['foto']['tmp_name'], "images/eventos/{$nombrefoto}");
            redirect('admin/eventos');
          }
        }else {
          $this->admin_model->editarEvento($id,$titulo,$fecha,$hora,$foto,$descripcion);
          redirect('admin/eventos');
        }
      }
    }else if (isset($_POST['nuevo'])){
      redirect('admin/eventos');
    }

    if(!$this->session->userdata('admin') ){ // SI NO ESTÁ LOGUEADO
      redirect('web');
    }else{
    $this->load->view('admin/plantilla/encabezado_adm');
    $this->load->view('admin/eventos_adm_view');
    $this->load->view('admin/plantilla/pie_adm');
    }
  }

  public function miembros(){
    if(!$this->session->userdata('admin') ){ // SI NO ESTÁ LOGUEADO
      redirect('web');
    }else{
    $this->load->view('admin/plantilla/encabezado_adm');
    $this->load->view('admin/miembros_adm_view');
    $this->load->view('admin/plantilla/pie_adm');
    }
  }

  public function galeria(){
    if(!$this->session->userdata('admin') ){ // SI NO ESTÁ LOGUEADO
      redirect('web');
    }else{
    $this->load->view('admin/plantilla/encabezado_adm');
    $this->load->view('admin/galeria_adm_view');
    $this->load->view('admin/plantilla/pie_adm');
    }
  }

  public function clasificados(){
    if(!$this->session->userdata('admin') ){ // SI NO ESTÁ LOGUEADO
      redirect('web');
    }else{
    $this->load->view('admin/plantilla/encabezado_adm');
    $this->load->view('admin/clasificados_adm_view');
    $this->load->view('admin/plantilla/pie_adm');
    }
  }

  public function desactivarClasificados($id){
    if(!$this->session->userdata('admin') ){ // SI NO ESTÁ LOGUEADO
      redirect('web');
    }else{
      $this->admin_model->desactivarClasificados($id);
      redirect('admin/clasificados');
    }
  }

  public function activarClasificados($id){
    if(!$this->session->userdata('admin') ){ // SI NO ESTÁ LOGUEADO
      redirect('web');
    }else{
      $this->admin_model->activarClasificados($id);
      redirect('admin/clasificados');
    }
  }

  public function contacto(){
    if(!$this->session->userdata('admin') ){ // SI NO ESTÁ LOGUEADO
      redirect('web');
    }else{
    $this->load->view('admin/plantilla/encabezado_adm');
    $this->load->view('admin/contacto_adm_view');
    $this->load->view('admin/plantilla/pie_adm');
    }
  }

  public function faq(){
    if(isset($_POST['publicar'])){
      $id = $_POST['id'];
      $pregunta = $_POST['pregunta'];
      $respuesta = $_POST['respuesta'];

      if($id==0){ //SE SE ESTÁ CREANDO
        $this->admin_model->guardarFAQ($pregunta,$respuesta);
        redirect('admin/faq');
      }

      else if($id>0){ //SE ESTÁ EDITANDO
        $this->admin_model->editarFAQ($id,$pregunta,$respuesta);
        redirect('admin/faq');
      }
    } else if (isset($_POST['nuevo'])){
        redirect('admin/faq');
      }

    if(!$this->session->userdata('admin') ){ // SI NO ESTÁ LOGUEADO
      redirect('web');
    }else{
    $this->load->view('admin/plantilla/encabezado_adm');
    $this->load->view('admin/faq_adm_view');
    $this->load->view('admin/plantilla/pie_adm');
    }
  }

  public function administradores(){
    $this->load->view('admin/plantilla/encabezado_adm');
    $this->load->view('admin/admin_adm_view');
    $this->load->view('admin/plantilla/pie_adm');
  }

  public function parametros(){

    if(isset($_POST['actualizar'])){

      $config['upload_path']          = 'images/iconos/';
      $config['allowed_types']        = 'ico|gif';
      $config['file_name'] 						= $_POST['nombre'];
      $config['max_size']             = 100;
      $config['max_width']            = 512;
      $config['max_height']           = 512;

      $infobdd = "<?php
define('TITULO','{$_POST['titulo']}');
define('EQUIPO','{$_POST['nombre']}');
define('LOGO','images/iconos/{$config['file_name']}');
      ";
      $this->load->library('upload', $config);
      $this->upload->initialize($config);

      if ( ! $this->upload->do_upload('foto')){
          $error = array('error' => $this->upload->display_errors());
      }else{
          $data = array('upload_data' => $this->upload->data());
      }

			file_put_contents("application/config/settings.php",$infobdd);
    }

    if(!$this->session->userdata('admin') ){ // SI NO ESTÁ LOGUEADO
      redirect('web');
    }else{
    $this->load->view('admin/plantilla/encabezado_adm');
    $this->load->view('admin/parametros_adm_view');
    $this->load->view('admin/plantilla/pie_adm');
    }
  }

}
