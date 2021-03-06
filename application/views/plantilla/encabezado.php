<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width= device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0">
		<title><?= $this->config->item('titulo') ?></title>
		<link rel="shortcut icon" href="<?php echo base_url() .$this->config->item('logo') ?>">
		<style>
			.centro{
				min-height: 300px;
			}
			.main{
				margin-top: 20px;
				margin-bottom: 20px;
			}
			.post{
				padding-bottom: 20px;
				margin-bottom: 20px;
				border-bottom: 1px solid #999;
			}
			.post .post-title a{
				color: #333;
			}
			.post .thumb{
				margin-right: 10px;
				width: 40%;
			}
			.post .thumb img{
				width: 100%;
			}
			.post .contenedor-botones{
				width: 100%;

			}
		</style>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	</head>
	<body style="background-color: rgb(239, 239, 239); margin-top: 50px;">
		<div class = "container">
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    	  <div class="container-fluid">
    		    <div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
									<!-- cd-faq-content -->
									<span class="icon-bar"></span>
							 		<span class="icon-bar"></span>
							 		<span class="icon-bar"></span>
								</button>
    		        <a class="navbar-brand" href="<?= site_url('web') ?>"><?= $this->config->item('equipo') ?></a>
    		    </div>
					<div class="collapse navbar-collapse" id="mainNavBar">
    		    <ul class="nav navbar-nav">
        		  <li><a href="<?= site_url('web/noticias') ?>">Noticias</a></li>
        		  <li><a href="<?= site_url('galeria') ?>">Galería</a></li>
							<li><a href="<?= site_url('web/eventos') ?>">Eventos</a></li>
							<li><a href="<?= site_url('web/miembros') ?>">Miembros</a></li>
							<li class="dropdown">
							    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Clasificados<b class="caret"></b></a>
							    <ul class="dropdown-menu">
							        <li><a href="<?= site_url('web/clasificados') ?>">Ver anuncios</a></li>
							        <li><a href="<?= site_url('web/crearClasificados') ?>">Crear anuncio</a></li>
							    </ul>
							</li>
							<li><a href="<?= site_url('web/contacto') ?>">Contacto</a></li>
							<li><a href="<?= site_url('web/faq') ?>">FAQ</a></li>
							<?php if ($this->session->userdata('admin')){ ?>
								<li><a href="<?= site_url('admin') ?>">Admin</a></li>
							<?php } ?>
    		    </ul>
    		    <ul class="nav navbar-nav navbar-right">
							<?php if ($this->session->userdata('cedula')){ ?>
								<li><a href="<?= site_url('login/logout') ?>"><span class="glyphicon glyphicon-log-out"></span> Cerrar sesión</a></li>
							<?php }else{ ?>
								<li><a href="<?= site_url('register') ?>"><span class="glyphicon glyphicon-user"></span> Registrarse</a></li>
	        		  <li><a href="<?= site_url('login') ?>"><span class="glyphicon glyphicon-log-in"></span> Iniciar sesión</a></li>
							<?php } ?>
    		    </ul>
					</div>
    	  </div>
    	</nav>
			</br>
			<div class="centro">
