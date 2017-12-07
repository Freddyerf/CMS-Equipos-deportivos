<style>
	a.final{
		position:relative;
		top:177px;
		
		
	}
</style>

<h1 style="float:left">Galerias</h1>
<a style='float:right'href='<?=base_url('Galeria/crearGaleria')?>' class='btn btn-success'>Crear Galeria</a>
<div style='clear:left'></div>
<?php
	//var_dump($galerias);
	if($galerias!=null)
	foreach($galerias as $file){?>
	<article class='post clearfix'>
            <a href="<?= site_url('web/verNoticias') ?>" class="thumb pull-left">
                <img class="img-thumbnail" src="<?php echo base_url() ."images/noticia1.jpg"; ?>" alt="">
            </a>
            <h2 class="post-title"><a href="<?= site_url('web/verNoticias').'?id='.$file->id ?>"><?= $file->nombre ?></a></h2>
            <p class="post-contenido text-justify"><?= $file->descripcion ?></p>
            <div class="contenedor-botones">
              <a href="<?= site_url('galeria/galeria').'?id='.$file->id ?>" class="btn btn-primary final">Ver Galeria</a>
            </div>
      </article>

<?php } ?>
<?=$creados?>