<h1>Crear Galeria</h1>
<form method="post" action='procesoCrearGaleria' enctype='multipart/form-data'>
	<div>
		<div class="row">
			<div class='col col-md-6'>
				<div class='input-group form-gruop'>
					<label class='input-group-addon'>Titulo</label>
					<input type='text' name='txtitulo' class='form-control'/>
				</div>
			</div>
		</div>
		<div class="row">
			<div class='col col-md-6'>
				<div class='input-group form-gruop'>
					<label class='input-group-addon'>Descripcion</label>
					<textarea name='txdescripcion' class='form-control'></textarea>
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
		<input type='submit' class='btn btn-success' value='Crear Galeria'>
		<a type='submit' class='btn btn-primary' href='<?=base_url('Galeria')?>'>Ir atras</a>
	</div>
</form>