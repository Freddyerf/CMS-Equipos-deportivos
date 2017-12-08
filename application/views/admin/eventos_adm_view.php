<style>
hr {
  border: 0.5px solid #282726;
  width: 80%;
}
</style>
<?php
  $this->load->model('admin_model');

  if(isset($_GET['id'])){
    $evento = $this->admin_model->getEvento($_GET['id']);
  }

  else if(isset($_GET['del'])){
    $this->admin_model->eliminarEvento($_GET['del']);
  }
 ?>
<div class="container">
  <h2><center>Agregar evento</center></h2>
  <hr/>
  <form method = "post" enctype="multipart/form-data">
    <input type="hidden" value="<?php echo( isset($_GET['id']) )?$evento[0]['id_evento']:'0'; ?>" name="id"/>
    <div class="col col-sm-8 col-sm-offset-2">
      <div class="form-group input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-bookmark"></span></span>
        <input id="titulo" type="text" class="form-control" name="titulo" placeholder="Título" value="<?php echo( isset($_GET['id']) )?$evento[0]['titulo']:''; ?>" required>
      </div>
      <div class="form-group input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
        <input id="fecha" type="date" class="form-control" name="fecha" value="<?php echo( isset($_GET['id']) )?$evento[0]['fecha']:date("Y-m-d"); ?>" required>
      </div>
      <div class="form-group input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
        <input id="hora" type="time" class="form-control" name="hora" value="<?php echo( isset($_GET['id']) )?$evento[0]['hora']:date("h:i"); ?>" required>
      </div>
      <div class="form-group input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-picture"></span></span>
        <input type="file" name="foto" class="form-control"/>
      </div>
      <div>
        <h4>Descripción del evento:</h4>
        <textarea id="descripcion" name="descripcion"><?php echo( isset($_GET['id']) )?$evento[0]['cuerpo']:''; ?></textarea>
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
  <h4><strong>Eventos agregados:</strong></h4>
  <table class = "table table-responsive">
    <thead>
      <tr>
        <th>ID</th>
        <th>Título</th>
        <th>Fecha</th>
        <th>Hora</th>
        <th style="text-align: center;">Foto</th>
        <th>Act</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $files = $this->admin_model->mostrarEventos();
        foreach($files as $file){
          $i=0;
          echo "<tr>";
            foreach($file as $campo){
              if($i==4){
                ?>
                <td>
                <div style="width: 100%; max-width: 300px; margin: auto;">
                  <img style="width: 100%;height: auto;" src="<?php echo base_url() ."images/eventos/{$file->id_evento}{$file->foto}"; ?>" alt="">
                </div>
                </td>
                <?php
              }else {
                echo "<td>{$campo}</td>";
              }

              $i++;
            }
        ?>
        <td>
          <a href="<?php echo site_url('admin/eventos').'?id='.$file->id_evento ?>" class='btn btn-warning'>Editar</a>
          <a href="<?php echo site_url('admin/eventos').'?del='.$file->id_evento?>" class='btn btn-danger'>Eliminar</a>
        </td>
        </tr>
      <?php } ?>
    </tbody>

  </table>
</div>
