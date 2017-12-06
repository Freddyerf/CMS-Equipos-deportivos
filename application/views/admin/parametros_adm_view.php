<div class="container">
	<h2><center>Parámetros</center></h2>
	<h4><center>Editar los parámetros de la página</center></h4>
	<br>
	<form method = "post" enctype="multipart/form-data">
		<div class="col col-sm-4 col-sm-offset-4">
			<div class="form-group input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-bookmark"></span></span>
				<input id="titulo" type="text" class="form-control" name="titulo" placeholder="Título de la página" required>
			</div>
			<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>
				<input id="nombre" type="text" class="form-control" name="nombre" placeholder="Nombre del equipo" required>
			</div>
      <h5>Logo del equipo:</h5>
      <div class="form-group input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-picture"></span></span>
        <input type="file" name="foto" class="form-control"/>
      </div>
			<div>
				<center><button type="submit" class="btn btn-primary">Actualizar cambios</button></center>
			</div>
		</div>
	</form>
</div>
