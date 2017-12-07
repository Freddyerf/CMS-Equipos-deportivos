<style>
hr {
  border: 0.5px solid #282726;
  width: 80%;
}
</style>
<div class="container">
  <h2><center>Anuncios clasificados</center></h2>
  <hr/>
  <table class = "table table-responsive">
    <thead>
      <tr>
        <th>ID</th>
        <th>Titulo</th>
        <th>Cuerpo</th>
        <th>Estado</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $files = $this->admin_model->mostrarTodosClasificados();
        foreach($files as $file){
          echo "<tr>";
            foreach($file as $campo){
              echo "<td>{$campo}</td>";
            }
        ?>
        <td>
          <?php
          $estado = $this->admin_model->getEstadoClasificado($file->id_clasificado);
          if ($estado == 1){ // SI ESTÁ ACTIVO ?>
            <a href="<?php echo site_url("admin/desactivarClasificados/{$file->id_clasificado}")?>" class='btn btn-danger'>Desactivar</a>
          <?php }else { ?>
            <a href="<?php echo site_url("admin/activarClasificados/{$file->id_clasificado}") ?>" class='btn btn-primary'>Activar</a>
          <?php } ?>
        </td>
        </tr>
      <?php } ?>
    </tbody>

  </table>
</div>
