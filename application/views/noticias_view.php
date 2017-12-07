<section class="center-block">
  <div class="miga-de-pan">
    <ol class="breadcrumb">
      <li><a href="#">Noticias</a></li>
    </ol>

    <?php
    $CI= &get_instance();
    $CI->load->model('web_model');
    $files = $CI->web_model->mostrarNoticias(); ?>
      <?php foreach($files as $file){ ?>
        <article class='post clearfix'>
            <a href="<?= site_url('web/verNoticias').'?id='.$file->id_noticia ?>" class="thumb pull-left">
                <img class="img-thumbnail" src="<?php echo base_url() ."images/noticia1.jpg"; ?>" alt="">
            </a>
            <h2 class="post-title"><a href="<?= site_url('web/verNoticias').'?id='.$file->id_noticia ?>"><?= $file->titulo ?></a></h2>
            <p class="post-contenido text-justify"><?= $file->resumen ?></p>
            <div class="contenedor-botones">
              <a href="<?= site_url('web/verNoticias').'?id='.$file->id_noticia ?>" class="btn btn-primary">Leer Mas</a>
            </div>
      </article>
    <?php } ?>

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
        <strong>1</strong>
        <a href="http://localhost/CMS-Equipos-deportivos/Galeria/index/1" data-ci-pagination-page="2">2</a>
        <a href="http://localhost/CMS-Equipos-deportivos/Galeria/index/2" data-ci-pagination-page="3">3</a>
        <a href="http://localhost/CMS-Equipos-deportivos/Galeria/index/1" data-ci-pagination-page="2" rel="next">&gt;</a>
        <a href="http://localhost/CMS-Equipos-deportivos/Galeria/index/19" data-ci-pagination-page="20">Last &rsaquo;
        </a>
  </div>
</section>
