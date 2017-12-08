<section class="posts col-md-9">
  <div class="miga-de-pan">
    <ol class="breadcrumb">
      <li><a href="#">Eventos</a></li>
    </ol>

    <?php
    $CI= &get_instance();
    $CI->load->model('web_model');
    $files = $CI->web_model->mostrarEventos(); ?>
      <?php foreach($files as $file){ ?>
        <article class='post clearfix'>
            <a href="#" class="thumb pull-left">
                <img class="img-thumbnail" src="<?php echo base_url() ."images/eventos/{$file->id_evento}{$file->foto}"; ?>" alt="">
            </a>
            <h2 class="post-title"><a href="#"><?= $file->titulo ?></a></h2>
            <p><span class="post-fecha"><?= $file->fecha ?></span> a las <span class="post-autor"><?= $file->hora ?></span></p>
            <p class="post-contenido text-justify"><?= $file->cuerpo ?></p>
            <div class="contenedor-botones">
              <a href="#" class="btn btn-primary">Asistir</a>
              <a href="#" class="btn btn-success">Asistirán<span class="badge">3</span></a>
            </div>
      </article>
    <?php } ?>

    <nav>
      <div class="center-block">
        <ul class="pagination">
          <li class="disabled"><a href="#">&laquo;<span class="sr-only">Anterior</span></a></li>
          <li class="active"><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">6</a></li>
          <li><a href="#">&raquo;<span class="sr-only">Siguiente</span></a></li>
        </ul>
      </div>
    </nav>
  </div>
</section>
