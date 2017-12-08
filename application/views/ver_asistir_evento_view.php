<style>
hr {
  border: 0.5px solid #282726;
  width: 60%;
}
</style>

<div class="container">
  <h2><center><?= $titulo ?></center></h2><hr/>
  <h4><strong>Listado de miembros que asistirán:</strong></h4>
  <table class = "table table-responsive">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Telefono</th>
        <th>Correo</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $CI = &get_instance();
        $CI->load->model('web_model');
        $files = $CI->web_model->usuariosAsistirEvento($evento);
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
