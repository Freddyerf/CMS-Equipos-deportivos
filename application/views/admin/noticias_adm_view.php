<style>
hr {
  border: 0.5px solid #282726;
  width: 80%;
}
</style>
<div class="container">
  <h2><center>Agregar noticia</center></h2>
  <hr/>
  <form method = "post" enctype="multipart/form-data">
    <div class="col col-sm-8 col-sm-offset-2">
      <div class="form-group input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-bookmark"></span></span>
        <input id="titulo" type="text" class="form-control" name="titulo" placeholder="Título" required>
      </div>
      <div class="form-group input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-comment"></span></span>
        <input id="resumen" type="text" class="form-control" name="resumen" placeholder="Resumen" required>
      </div>
      <div class="form-group input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-picture"></span></span>
        <input type="file" name="foto" class="form-control"/>
      </div>
      <div>
        <h4>Cuerpo de la noticia:</h4>
        <textarea id="texto" name="texto"></textarea>
      </div>
    </div>
  </form>
</div>
