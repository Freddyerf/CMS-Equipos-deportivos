<style>
hr {
  border: 0.5px solid #282726;
  width: 80%;
}
</style>

<div class="container">
  <h2><center>Agregar evento</center></h2>
  <hr/>
  <form method = "post" enctype="multipart/form-data">
    <div class="col col-sm-8 col-sm-offset-2">
      <div class="form-group input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-bookmark"></span></span>
        <input id="titulo" type="text" class="form-control" name="titulo" placeholder="Título" required>
      </div>
      <div class="form-group input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
        <input id="fecha" type="date" class="form-control" name="fecha" value="<?=date("Y-m-d")?>" required>
      </div>
      <div class="form-group input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
        <input id="hora" type="time" class="form-control" name="hora" value="<?=date("h:i")?>" required>
      </div>
      <div class="form-group input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-picture"></span></span>
        <input type="file" name="foto" class="form-control"/>
      </div>
      <div>
        <h4>Descripción del evento:</h4>
        <textarea id="descripcion" name="descripcion"></textarea>
      </div>
      <br>
      <div>
        <center><button type="submit" class="btn btn-success">Publicar</button></center>
      </div>
    </div>
  </form>
</div>
