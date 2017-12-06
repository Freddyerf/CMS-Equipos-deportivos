<style>
hr {
  border: 0.5px solid #282726;
  width: 20%;
}

#map {
  height: 400px;
  width: 100%;
 }
</style>
<?php
$latituddelmapa = 18.3737;
$longituddelmapa = -69.4342;
  if(isset($_GET['lat']) && isset($_GET['lon'])){
    $latituddelmapa = $_GET['lat'];
    $longituddelmapa = $_GET['lon'];
  }
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
        <th>Latitud</th>
        <th>Longitud</th>
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
          <a href="<?php echo site_url('admin/miembros').'?lat='.$file->latitud.'&lon'.$file->longitud ?>" class='btn btn-primary'>Mapa</a>
        </td>
        </tr>

      <?php } ?>
    </tbody>
  </table>
</div>
<div class="container">
  <h2><center>Mapa</center></h2><hr/>
  <div id="map"></div>
  <script>
      function initMap() {
      var i = 0;
      var uluru = {lat: <?=$latituddelmapa?>, lng: <?=$longituddelmapa?>};
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 8,
        center: uluru
      });
      var marker = new google.maps.Marker({
        position: uluru,
        map: map
      });
    }
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDbgVz3sl_d9Lmnn1NUjlPf774D22Ni1lM&callback=initMap" async defer>
  </script>
</div>
