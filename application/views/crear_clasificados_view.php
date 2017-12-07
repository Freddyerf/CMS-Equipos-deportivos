<style>
hr {
  border: 0.5px solid #282726;
  width: 80%;
}
</style>

<?php
  $CI= &get_instance();
  $CI->load->model('web_model');
  $cedula = $CI->session->userdata('cedula');
  $usuario = $CI->web_model->getUsuario($cedula);

 ?>
 <div class="container">
   <h2><center>Crear anuncio</center></h2>
   <hr/>
   <form method = "post" enctype="multipart/form-data">
     <input type="hidden" value="<?= $usuario[0]['id_usuario'] ?>" name="id"/>
     <div class="col col-sm-8 col-sm-offset-2">
       <div class="row">
         <div class="col-md-4">
           <div class="form-group input-group">
             <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
             <input id="fecha" type="text" class="form-control" name="fecha" value="<?= date("Y-m-d h:i"); ?>" disabled>
              <input id="fecha" type="hidden" class="form-control" name="fecha" value="<?= date("Y-m-d h:i"); ?>">
           </div>
         </div>
         <div class="col-md-4">
           <div class="form-group input-group">
             <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
             <input id="usuario" type="text" class="form-control" name="usuario" value="<?= $usuario[0]['nombre'] ?>" disabled>
             <input id="usuario" type="hidden" class="form-control" name="usuario" value="<?= $usuario[0]['nombre'] ?>" >
           </div>
         </div>
         <div class="col-md-4">
           <div class="form-group input-group">
             <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
             <input id="usuario" type="text" class="form-control" name="usuario" value="<?= $usuario[0]['nombre'] ?>" disabled>
             <input id="contacto" type="hidden" class="form-control" name="contacto" value="<?= $usuario[0]['telefono'] ?>" >
           </div>
         </div>
       </div>
       <div class="form-group input-group">
         <span class="input-group-addon"><span class="glyphicon glyphicon-bookmark"></span></span>
         <input id="titulo" type="text" class="form-control" name="titulo" placeholder="Título" required>
       </div>
       <h4>Miniatura:</h4>
       <div class="form-group input-group">
         <span class="input-group-addon"><span class="glyphicon glyphicon-picture"></span></span>
         <input type="file" name="foto" class="form-control"/>
       </div>
       <div>
         <h4>Descripción del anuncio:</h4>
         <textarea id="descripcion" name="descripcion"></textarea>
       </div>
       <br>
       <div>
         <center>
           <button type="submit" class="btn btn-primary" name="publicar">Publicar</button>
         </center>
       </div>
     </div>
   </form>
 </div>

<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>
  tinymce.init({
    selector:'textarea',
    height: 250,
    theme: 'modern',
    plugins: [
      'advlist autolink lists link image charmap print preview hr anchor pagebreak',
      'searchreplace wordcount visualblocks visualchars code fullscreen',
      'insertdatetime media nonbreaking save table contextmenu directionality',
      'emoticons template paste textcolor colorpicker textpattern imagetools'
    ],
    paste_as_text: true,
    toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
    toolbar2: 'forecolor backcolor emoticons',

  });
</script>
