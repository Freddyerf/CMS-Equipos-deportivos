<div class="container">
	<h2><center>Registro</center></h2>
	<h4><center>Ingrese sus credenciales</center></h4>
	<br>
	<form method = "post">
		<div class="col col-sm-4 col-sm-offset-4">
			<div class="form-group input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
				<input id="email" type="text" class="form-control" name="email" placeholder="Correo electrónico" required>
			</div>
			<div class="form-group input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
				<input id="password" type="password" class="form-control" name="password" placeholder="Contraseña" required>
			</div>
			<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
				<input id="password2" type="password" class="form-control" name="password2" placeholder="Confirme su contraseña" required>
			</div>
			<div class="form-group input-group">
				<a href = "<?= site_url('Login') ?>">Ya tengo una cuenta</a>
			</div>
			<div>
				<center><button type="submit" class="btn btn-success">Registrarse</button></center>
			</div>
		</div>
	</form>
</div>
