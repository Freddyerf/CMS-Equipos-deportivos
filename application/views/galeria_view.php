

<?php $i=0;
	//var_dump($galeria);
	$direccion='images/galeria/'.$galeria->nombreCarpeta."/";
	$fotos=scandir('images\galeria\\'.$galeria->nombreCarpeta);
	unset($fotos[0]);
	unset($fotos[1]);
	$i=0;
?>

<div class="container">
	<h2><?=$galeria->nombre?></h2>
	<h5><?=$galeria->descripcion?></h5>
	<div class="row">
<?php foreach($fotos as $foto){
	$imagen=$direccion.$foto;
?>
	<?php if($i==4){
		$i=0;
	?>
	</div>
	<div class='row'>

	<?php } ?>
		<div class="col-xs-6 col-md-3">
		  <a href="#" class="thumbnail"><img src="<?php echo base_url() .$imagen; ?>" alt=""></a>
		</div>
  
<?php 
	$i++;
	}  
?>
	</div>
	<a style='position:fixed;bottom:10px' href='<?=base_url("galeria")?>' class='btn btn-primary'>Ir atras</a>
</div>