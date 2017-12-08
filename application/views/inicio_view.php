  <section class="posts col-md-9">
    <div class="miga-de-pan">
      <ol class="breadcrumb">
        <li><a href="<?= site_url('web') ?>">Inicio</a></li>
      </ol>

      <?php
      $CI= &get_instance();
      $CI->load->model('web_model');
      $files = $CI->web_model->mostrarNoticias();
      $count = 5;?>
        <?php foreach($files as $file){ if($count!=0){?>
          <article class='post clearfix'>
              <a href="<?= site_url('web/verNoticias').'?id='.$file->id_noticia ?>" class="thumb pull-left">
                  <img class="img-thumbnail" src="<?php echo base_url() ."images/noticias/{$file->foto}"; ?>" alt="">
              </a>
              <h2 class="post-title"><a href="<?= site_url('web/verNoticias').'?id='.$file->id_noticia  ?>"><?= $file->titulo ?></a></h2>
              <p class="post-contenido text-justify"><?= $file->resumen ?></p>
              <div class="contenedor-botones">
                <a href="<?= site_url('web/verNoticias').'?id='.$file->id_noticia  ?>" class="btn btn-primary">Leer Mas</a>
              </div>
        </article>
      <?php $count = $count -1; } } ?>
    </div>
  </section>
<aside class="col-md-3 hidden-xs hidden-sm">
  <h4>Eventos cercanos</h4>
  <div class="list-group">
    <?php
    $files = $CI->web_model->mostrarEventos(); ?>
      <?php foreach($files as $file){ ?>
            <a href="<?= site_url('web/eventos') ?>" class="list-group-item"><?= $file->titulo ?></a>
    <?php } ?>
  </div>
  <h4>Anuncios Clasificados</h4>
  <?php
  $files = $CI->web_model->mostrarClasificados(); ?>
    <?php foreach($files as $file){ ?>
          <a href="<?= site_url('web/verClasificados').'?id='.$file->id_clasificado ?>" class="list-group-item">
            <h4 class="list-group-item-heading"><?= $file->titulo ?></h4>
            <p class="list-group-item-text"><?= $file->usuario ?> - <?= $file->contacto ?></p>
          </a>
  <?php } ?>
</aside>
    </div>
  </div>
</div>
