<style>
hr {
  border: 0.5px solid #282726;
  width: 20%;
}
</style>
<?php
  if(isset($_GET['id'])){
    $this->admin_model->ponerPriv($_GET['id']);
  }
  else if(isset($_GET['del'])){
      $this->admin_model->quitarPriv($_GET['del']);
  }
 ?>
<div class="container">
  <h2><center>Usuarios</center></h2><hr/>
  <h4><strong>Listado de usuarios:</strong></h4>
  <table class = "table table-responsive">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Telefono</th>
        <th>Correo</th>
        <th>Administrador</th>
        <th>Privilegios admin</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $files = $this->admin_model->mostrarUsuarios();
        foreach($files as $file){
          echo "<tr>";
            foreach($file as $campo){
              echo "<td>{$campo}</td>";
            }
        ?>
        <td>
           <a href="<?php echo site_url('admin/administradores').'?id='.$file->id_usuario ?>" class='btn btn-primary'>Dar privilegios</a>
           <a href="<?php echo site_url('admin/administradores').'?del='.$file->id_usuario ?>" class='btn btn-danger'>Quitar privilegios</a>
        </td>
        </tr>
      <?php } ?>
    </tbody>

  </table>
</div>
