<section class="posts col-md-9">
  <div class="miga-de-pan">
    <ol class="breadcrumb">
      <li><a href="#">Noticias</a></li>
    </ol>

    <?php
    $CI= &get_instance();
    $CI->load->model('web_model');
    $files = $CI->web_model->mostrarClasificados(); ?>
      <?php foreach($files as $file){ ?>
        <article class='post clearfix'>
            <a href="<?= site_url('web/verClasificados') ?>" class="thumb pull-left">
                <img class="img-thumbnail" src="<?php echo base_url() ."images/noticia1.jpg"; ?>" alt="">
            </a>
            <h2 class="post-title"><a href="<?= site_url('web/verNoticias').'?id='.$file->id_noticia ?>"><?= $file->titulo ?></a></h2>
            <p class="post-contenido text-justify"><?= $file->descripcion ?></p>
            <div class="contenedor-botones">
              <a href="<?= site_url('web/verClasificados').'?id='.$file->id_clasificado ?>" class="btn btn-primary">Leer Mas</a>
              <a href="<?= site_url('web/verClasificados').'?id='.$file->id_clasificado  ?>" class="btn btn-success">Comentarios<span class="badge">5</span></a>
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
