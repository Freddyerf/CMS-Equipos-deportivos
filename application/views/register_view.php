<style>
	*, *:before, *:after {
	  -moz-box-sizing: border-box;
	  -webkit-box-sizing: border-box;
	  box-sizing: border-box;
	}

	body {
	  font-family: 'Nunito', sans-serif;
	  color: #384047;
	}

	form {
	  max-width: 300px;
	  margin: 10px auto;
	  padding: 10px 20px;
	  background: #f4f7f8;
	  border-radius: 8px;
	}

	h1 {
	  margin: 0 0 30px 0;
	  text-align: center;
	}

	input[type="text"],
	input[type="password"],
	input[type="date"],
	input[type="datetime"],
	input[type="email"],
	input[type="number"],
	input[type="search"],
	input[type="tel"],
	input[type="time"],
	input[type="url"],
	textarea,
	select {
	  background: rgba(255,255,255,0.1);
	  border: none;
	  font-size: 16px;
	  height: auto;
	  margin: 0;
	  outline: 0;
	  padding: 15px;
	  width: 100%;
	  background-color: #e8eeef;
	  color: #8a97a0;
	  box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
	  margin-bottom: 30px;
	}

	input[type="radio"],
	input[type="checkbox"] {
	  margin: 0 4px 8px 0;
	}

	select {
	  padding: 6px;
	  height: 32px;
	  border-radius: 2px;
	}

	button {
	  padding: 19px 39px 18px 39px;
	  color: #FFF;
	  background-color: #4bc970;
	  font-size: 18px;
	  text-align: center;
	  font-style: normal;
	  border-radius: 5px;
	  width: 100%;
	  border: 1px solid #3ac162;
	  border-width: 1px 1px 3px;
	  box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
	  margin-bottom: 10px;
	}

	fieldset {
	  margin-bottom: 30px;
	  border: none;
	}

	legend {
	  font-size: 1.4em;
	  margin-bottom: 10px;
	}

	label {
	  display: block;
	  margin-bottom: 8px;
	}

	label.light {
	  font-weight: 300;
	  display: inline;
	}

	.number {
	  background-color: #5fcf80;
	  color: #fff;
	  height: 30px;
	  width: 30px;
	  display: inline-block;
	  font-size: 0.8em;
	  margin-right: 4px;
	  line-height: 30px;
	  text-align: center;
	  text-shadow: 0 1px 0 rgba(255,255,255,0.2);
	  border-radius: 100%;
	}

	@media screen and (min-width: 480px) {

	  form {
	    max-width: 480px;
	  }

	}
</style>

<form method="post">

  <h1>Registro</h1>

  <fieldset>
    <legend><span class="number">1</span>Información básica</legend>
		<label for="cedula">Cédula:</label>
    <input type="text" id="cedula" name="user_cedula" required>

		<label for="name">Nombre:</label>
    <input type="text" id="name" name="user_name">

		<label for="apellido">Apellido:</label>
    <input type="text" id="apellido" name="user_apellido">

		<label for="tel">Teléfono:</label>
    <input type="text" id="tel" name="user_tel">

    <label for="mail">Correo electrónico:</label>
    <input type="email" id="mail" name="user_email" required>

    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="user_password" required>

		<label for="password1">Confirmar contraseña:</label>
    <input type="password" id="password1" name="user_password1" required>
  </fieldset>

  <fieldset>
  	<legend><span class="number">2</span>Información avanzada</legend>
		<label for="direccion">Dirección:</label>
    <input type="text" id="direccion" name="user_direccion">

		<label for="latitud">Latitud:</label>
    <input type="text" id="latitud" name="user_latitud">

		<label for="longitud">Longitud:</label>
    <input type="text" id="longitud" name="user_longitud">

  </fieldset>
  <button type="submit">Registrarse</button>
</form>
