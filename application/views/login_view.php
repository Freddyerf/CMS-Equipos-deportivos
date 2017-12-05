<div class="container">
	<h2><center>Login</center></h2>
	<h4><center>Ingrese sus credenciales</center></h4>
	<br>
	<form method = "post">
		<div class="col col-sm-4 col-sm-offset-4">
			<div class="form-group input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
				<input id="cedula" type="text" class="form-control" name="user_cedula" placeholder="Cédula" required>
			</div>
			<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
				<input id="password" type="password" class="form-control" name="user_password" placeholder="Password" required>
			</div>
			<div class="form-group input-group">
				<a href = "<?= site_url('Register') ?>">Registrarse</a>
			</div>
			<div>
				<center><button type="submit" class="btn btn-success">Entrar</button></center>
			</div>
		</div>
	</form>
</div>
