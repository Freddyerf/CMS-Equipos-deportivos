<style>
hr {
  border: 0.5px solid #282726;
  width: 80%;
}
</style>
<?php
  $this->load->model('admin_model');

  if(isset($_GET['id'])){
    $faq = $this->admin_model->getFAQ($_GET['id']);
  }

  else if(isset($_GET['del'])){
    $this->admin_model->eliminarFAQ($_GET['del']);
  }
 ?>
<div class="container">
  <h2><center>Agregar pregunta</center></h2>
  <hr/>
  <form method = "post">
    <input type="hidden" value="<?php echo( isset($_GET['id']) )?$faq[0]['id_faq']:'0'; ?>" name="id"/>
    <div class="col col-sm-8 col-sm-offset-2">
      <div class="form-group input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-bookmark"></span></span>
        <input id="pregunta" type="text" class="form-control" name="pregunta" placeholder="Pregunta" value="<?php echo( isset($_GET['id']) )?$faq[0]['pregunta']:''; ?>" required>
      </div>
      <div>
        <h4>Respuesta:</h4>
        <textarea id="respuesta" name="respuesta"><?php echo( isset($_GET['id']) )?$faq[0]['respuesta']:''; ?></textarea>
      </div>
      <br>
      <div>
        <center>
          <button type="submit" class="btn btn-primary" name="publicar">Publicar</button>
          <button type="submit" class="btn btn-success" name="nuevo">Crear nueva</button>
        </center>
      </div>
    </div>
  </form>
</div>
<hr/>
<div class="container">
  <h4><strong>Preguntas agregadas:</strong></h4>
  <table class = "table table-responsive">
    <thead>
      <tr>
        <th>ID</th>
        <th>Pregunta</th>
        <th>Respuesta</th>
        <th>Act</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $files = $this->admin_model->mostrarFAQ();
        foreach($files as $file){
          echo "<tr>";
            foreach($file as $campo){
              echo "<td>{$campo}</td>";
            }
        ?>
        <td>
          <a href="<?php echo site_url('admin/faq').'?id='.$file->id_faq ?>" class='btn btn-warning'>Editar</a>
          <a href="<?php echo site_url('admin/faq').'?del='.$file->id_faq ?>" class='btn btn-danger'>Eliminar</a>
        </td>
        </tr>
      <?php } ?>
    </tbody>

  </table>
</div>
