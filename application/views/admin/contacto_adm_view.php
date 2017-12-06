<style>
hr {
  border: 0.5px solid #282726;
  width: 20%;
}
</style>
<?php
  $this->load->model('admin_model');
  if(isset($_GET['del'])){
    $this->admin_model->eliminarContacto($_GET['del']);
  }
 ?>
<div class="container">
  <h2><center>CONTACTOS</center></h2><hr/>
  <h4><strong>Mensajes enviados:</strong></h4>
  <table class = "table table-responsive">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Mensaje</th>
        <th>Act</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $files = $this->admin_model->mostrarContactos();
        foreach($files as $file){
          echo "<tr>";
            foreach($file as $campo){
              echo "<td>{$campo}</td>";
            }
        ?>
        <td>
          <a href="<?php echo site_url('admin/contacto').'?del='.$file->id_contacto?>" class='btn btn-danger'>Eliminar</a>
        </td>
        </tr>
      <?php } ?>
    </tbody>

  </table>
</div>
