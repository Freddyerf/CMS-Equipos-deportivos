<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title><?= $this->config->item('titulo') ?></title>
		<link rel="shortcut icon" href="<?php echo base_url() .$this->config->item('logo') ?>">
		<style>
			.centro{
				min-height: 300px;
			}
		</style>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
		<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
		<script>
			tinymce.init({
				selector:'textarea',
				height: 250,
				theme: 'modern',
				plugins: [
					'advlist autolink lists link image charmap print preview hr anchor pagebreak',
					'searchreplace wordcount visualblocks visualchars code fullscreen',
					'insertdatetime media nonbreaking save table contextmenu directionality',
					'emoticons template paste textcolor colorpicker textpattern imagetools'
				],
				toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
				toolbar2: 'forecolor backcolor emoticons',

			});
		</script>
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

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
    		        <a class="navbar-brand" href="<?= site_url('admin') ?>"><?= $this->config->item('equipo') ?></a>
    		    </div>
					<div class="collapse navbar-collapse" id="mainNavBar">
    		    <ul class="nav navbar-nav">
        		  <li><a href="<?= site_url('admin/noticias') ?>">Noticias</a></li>
        		  <li><a href="<?= site_url('admin/miembros') ?>">Miembros</a></li>
							<li><a href="<?= site_url('galeria') ?>">Galería</a></li>
							<li><a href="<?= site_url('admin/eventos') ?>">Eventos</a></li>
							<li><a href="<?= site_url('admin/clasificados') ?>">Clasificados</a></li>
							<li><a href="<?= site_url('admin/contacto') ?>">Contacto</a></li>
							<li><a href="<?= site_url('admin/faq') ?>">FAQ</a></li>
							<li><a href="<?= site_url('admin/administradores') ?>">Admin</a></li>
							<li><a href="<?= site_url('admin/parametros') ?>">Parámetros</a></li>
							<li><a href="<?= site_url('web') ?>">Web</a></li>
    		    </ul>
    		    <ul class="nav navbar-nav navbar-right">
        		  <li><a href="<?= site_url('login/logout') ?>"><span class="glyphicon glyphicon-log-out"></span> Cerrar sesión</a></li>
    		    </ul>
					</div>
    	  </div>
    	</nav>
			</br>
			<div class="centro">
