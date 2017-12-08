<section class="center-block">
  <div class="miga-de-pan">
    <ol class="breadcrumb">
      <li><a href="<?= site_url('web/eventos') ?>">Eventos</a></li>
    </ol>

    <?php
    if ($eventos != null){?>
      <?php foreach($eventos as $file){ ?>
        <article class='post clearfix'>
            <span class="thumb pull-left">
                <img class="img-thumbnail" src="<?php echo base_url() ."images/eventos/{$file->id_evento}{$file->foto}"; ?>" alt="">
            </span>
            <h2 class="post-title"><?= $file->titulo ?></h2>
            <p><span class="post-fecha"><?= $file->fecha ?></span> a las <span class="post-autor"><?= $file->hora ?></span></p>
            <p class="post-contenido text-justify"><?= $file->cuerpo ?></p>
            <div class="contenedor-botones">
              <a href="#" class="btn btn-primary">Asistir</a>
              <a href="#" class="btn btn-success">Asistirán<span class="badge">3</span></a>
            </div>
      </article>
    <?php } } ?>
  </div>
  <?= $links?>
</section>
