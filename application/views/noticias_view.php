<section class="center-block">
  <div class="miga-de-pan">
    <ol class="breadcrumb">
      <li><a href="#">Noticias</a></li>
    </ol>

    <?php
    if ($noticias != null){ ?>
      <?php foreach($noticias as $file){ ?>
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
    <?php } } ?>
  </div>
  <?=$links?>
</section>
