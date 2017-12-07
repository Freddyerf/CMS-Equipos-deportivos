<h1 style="float:left">Galerias</h1>
<a style='float:right'href='<?=base_url('Galeria/crearGaleria')?>' class='btn btn-success'>Crear Galeria</a>
<div style='clear:left'></div>
<?php
	if($galerias!=null)
	foreach($galerias as $articulo){?>
	<div class='galeria'></div>

<?php } ?>
<?=$creados?>