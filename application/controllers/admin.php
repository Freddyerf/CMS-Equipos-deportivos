<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Admin extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin_model');
  }

  function index()
  {
    $this->load->view('admin/plantilla/encabezado_adm');
    $this->load->view('admin/noticias_adm_view');
    $this->load->view('admin/plantilla/pie_adm');
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
            $this->admin_model->guardarNoticia($titulo,$resumen,$foto,$texto);
            redirect('admin/noticias');
          }
        }else{ // SI NO SE SUBIÓ UNA FOTO
          $this->admin_model->guardarNoticia($titulo,$resumen,$foto,$texto);
          redirect('admin/noticias');
        }


      }else if($id>0){ //SE ESTÁ EDITANDO
        if($foto!=''){ // SI SE SUBIÓ UNA FOTO
          if($_FILES['foto']['error']==0){ //SI NO HAY ERRORES
            $this->admin_model->editarNoticia($id,$titulo,$resumen,$foto,$texto);
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


    $this->load->view('admin/plantilla/encabezado_adm');
    $this->load->view('admin/noticias_adm_view');
    $this->load->view('admin/plantilla/pie_adm');
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
            $this->admin_model->guardarEvento($titulo,$fecha,$hora,$foto,$descripcion);
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
            $this->admin_model->editarEvento($id,$titulo,$fecha,$hora,$foto,$descripcion);
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
    if(isset($_POST['publicar'])){
      $id = $_POST['id'];
      $pregunta = $_POST['pregunta'];
      $respuesta = $_POST['respuesta'];

      if($id==0){ //SE SE ESTÁ CREANDO
        $this->admin_model->guardarEvento($titulo,$fecha,$hora,$foto,$descripcion);
        redirect('admin/eventos');
      }

      else if($id>0){ //SE ESTÁ EDITANDO
        $this->admin_model->editarEvento($id,$titulo,$fecha,$hora,$foto,$descripcion);
        redirect('admin/eventos');
      }
    } else if (isset($_POST['nuevo'])){
        redirect('admin/eventos');
      }


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

    if(isset($_POST['actualizar'])){

      $infobdd = "<?php
define('TITULO','{$_POST['titulo']}');
define('EQUIPO','{$_POST['nombre']}');
define('LOGO','{$_FILES['foto']['name']}');
			";

			file_put_contents("application/config/settings.php",$infobdd);
    }

    $this->load->view('admin/plantilla/encabezado_adm');
    $this->load->view('admin/parametros_adm_view');
    $this->load->view('admin/plantilla/pie_adm');
  }

}
