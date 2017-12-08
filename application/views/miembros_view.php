<style>
hr {
  border: 0.5px solid #282726;
  width: 20%;
}
</style>

<div class="container">
  <h2><center>Miembros</center></h2><hr/>
  <h4><strong>Listado de miembros:</strong></h4>
  <table class = "table table-responsive">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Telefono</th>
        <th>Correo</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $CI = &get_instance();
        $CI->load->model('web_model');
        $files = $CI->web_model->mostrarMiembros();
        foreach($files as $file){
          echo "<tr>";
            foreach($file as $campo){
              echo "<td>{$campo}</td>";
            }
        ?>
        </tr>

      <?php  } ?>
    </tbody>
  </table>
</div>
