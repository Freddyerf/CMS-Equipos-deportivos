<?php $titulo=(isset($galeria->id))?'Modificar':'Crear';?>
<h1><?=$titulo?> Galeria: <?=(isset($galeria->nombre))? $galeria->nombre : ''?></h1>
<form method="post" enctype='multipart/form-data'  
action='<?=(isset($galeria->id))?'procesoActualizarGaleria':'procesoCrearGaleria'?>'>
	<div>
		<?php echo (isset($galeria->id))? 
		"<input type='hidden' name='txid' value='{$galeria->id}'>"
		: '';?>
		<div class="row">
			<div class='col col-md-6'>
				<div class='input-group form-gruop'>
					<label class='input-group-addon'>Titulo</label>
					<input type='text' name='txtitulo' class='form-control' 
					value='<?php echo (isset($galeria->nombre))? $galeria->nombre : ''?>'/>
				</div>
			</div>
		</div>
		<div class="row">
			<div class='col col-md-6'>
				<div class='input-group form-gruop'>
					<label class='input-group-addon'>Descripcion</label>
					<textarea name='txdescripcion' class='form-control'
					><?php echo (isset($galeria->descripcion))? $galeria->descripcion : ''?></textarea>
				</div>
			</div>
		</div>
		<div class="row">
			<div class='col col-md-6'>
				<div class='input-group form-gruop'>
					<label class='input-group-addon'>Imagenes</label>
					<input name="flimagenes[]" type='file' class='form-control' multiple/>
				</div>
			</div>
		</div>
		<input type='submit' class='btn btn-success' value='<?=$titulo?> Galeria'>
		<a type='submit' class='btn btn-primary' href='<?=base_url('Galeria')?>'>Ir atras</a>
	</div>
</form>