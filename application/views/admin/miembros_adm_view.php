<style>
hr {
  border: 0.5px solid #282726;
  width: 20%;
}
</style>
<?php

 ?>
<div class="container">
  <h2><center>Miembros</center></h2><hr/>
  <h4><strong>Listado de miembros:</strong></h4>
  <table class = "table table-responsive">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Telefono</th>
        <th>Correo</th>
        <th>Act</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $files = $this->admin_model->mostrarMiembros();
        foreach($files as $file){
          echo "<tr>";
            foreach($file as $campo){
              echo "<td>{$campo}</td>";
            }
        ?>
        <td>
          <a href="<?php echo site_url('admin/miembros').'?del='.$file->id_usuario?>" class='btn btn-primary'>Exportar</a>
        </td>
        </tr>
      <?php } ?>
    </tbody>

  </table>
</div>
<div class="container">
  <h2><center>Mapa</center></h2><hr/>
</div>
