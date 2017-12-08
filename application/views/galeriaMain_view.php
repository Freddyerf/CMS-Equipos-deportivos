<style>
	div.contenedor-botones{
		position:relative;
		top:177px;
	}
</style>

<h1 style="float:left">Galerias</h1>
<?php if($this->session->userdata('admin')=='1'){//este if es para el administrador?>
<a style='float:right'href='<?=base_url('Galeria/crearGaleria')?>' class='btn btn-success'>Crear Galeria</a>
<?php } //cierre del administrador?>
<div style='clear:left'></div>
<?php
	if($galerias!=null)
	foreach($galerias as $file){?>
	<?php 
		$direccion=base_url().'images/galeria/'.$file->nombreCarpeta."/";
		$foto=scandir('images\galeria\\'.$file->nombreCarpeta)[2];
	?>
	<article class='post clearfix'>
            <a href="<?= site_url('web/verNoticias') ?>" class="thumb pull-left">
                <img class="img-thumbnail" src="<?=$direccion.$foto?>" alt="">
            </a>
            <h2 class="post-title"><a href="<?= site_url('web/verNoticias').'?id='.$file->id ?>"><?= $file->nombre ?></a></h2>
            <p class="post-contenido text-justify"><?= $file->descripcion ?></p>
            <div class="contenedor-botones">
              <a href="<?= site_url('galeria/galeria').'?id='.$file->id ?>" class="btn btn-primary">Ver Galeria</a>
			  <?php if($this->session->userdata('admin')=='1'){//este if es para el administrador?>
			  <a href="<?= site_url('galeria/galeria').'?editar='.$file->id ?>" class="btn btn-warning">Modificar Galeria</a>
			  <a href="javascript:eliminar(<?=$file->id?>,'<?=$file->nombre?>')" class="btn btn-danger">Eliminar Galeria</a>
			  <?php } //cierre del administrador?>
            </div>
      </article>

<?php } ?>
<?=$links?>
<script>

	function eliminar(idEliminar,nombre){
		if(confirm('Estas seguro que quieres borrar la galeria: '+ nombre)){
			window.location='<?=base_url('galeria/galeria?eliminar=')?>'+ idEliminar;
		}
	}
</script>
