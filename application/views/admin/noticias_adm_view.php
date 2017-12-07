<style>
hr {
  border: 0.5px solid #282726;
  width: 80%;
}
</style>
<?php
  $this->load->model('admin_model');

  if(isset($_GET['id'])){
    $noticia = $this->admin_model->getNoticia($_GET['id']);
  }

  else if(isset($_GET['del'])){
    $this->admin_model->eliminarNoticia($_GET['del']);
  }
 ?>
<div class="container">
  <h2><center>Agregar noticia</center></h2>
  <hr/>
  <form method = "post" enctype="multipart/form-data">
    <input type="hidden" value="<?php echo( isset($_GET['id']) )?$noticia[0]['id_noticia']:'0'; ?>" name="id"/>
    <div class="col col-sm-8 col-sm-offset-2">
      <div class="form-group input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-bookmark"></span></span>
        <input id="titulo" type="text" class="form-control" name="titulo" placeholder="Título" value="<?php echo( isset($_GET['id']) )?$noticia[0]['titulo']:''; ?>" required>
      </div>
      <div class="form-group input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-comment"></span></span>
        <input id="resumen" type="text" class="form-control" name="resumen" placeholder="Resumen" value="<?php echo( isset($_GET['id']) )?$noticia[0]['resumen']:''; ?>"required>
      </div>
      <div class="form-group input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-picture"></span></span>
        <input type="file" name="foto" class="form-control"/>
      </div>
      <div>
        <h4>Cuerpo de la noticia:</h4>
        <textarea id="texto" name="texto"><?php echo( isset($_GET['id']) )?$noticia[0]['cuerpo']:''; ?></textarea>
      </div>
      <br>
      <div>
        <center>
          <button type="submit" class="btn btn-primary" name="publicar">Publicar</button>
          <button type="submit" class="btn btn-success" name="nuevo">Nueva entrada</button>
        </center>
      </div>
    </div>
  </form>
</div>
<hr/>
<div class="container">
  <h4><strong>Noticias agregadas:</strong></h4>
  <table class = "table table-responsive">
    <thead>
      <tr>
        <th>ID</th>
        <th>Título</th>
        <th>Foto</th>
        <th>Act</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $files = $this->admin_model->mostrarNoticias();
        foreach($files as $file){
          echo "<tr>";
            foreach($file as $campo){
              echo "<td>{$campo}</td>";
            }
        ?>
        <td>
          <a href="<?php echo site_url('admin/noticias').'?id='.$file->id_noticia ?>" class='btn btn-warning'>Editar</a>
          <a href="<?php echo site_url('admin/noticias').'?del='.$file->id_noticia?>" class='btn btn-danger'>Eliminar</a>
        </td>
        </tr>
      <?php } ?>
    </tbody>

  </table>
</div>
