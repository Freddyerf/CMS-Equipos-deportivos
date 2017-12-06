<section class="posts col-md-9">
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
            <a href="#" class="thumb pull-left">
                <img class="img-thumbnail" src="<?php echo base_url() ."images/noticia1.jpg"; ?>" alt="">
            </a>
            <h2 class="post-title"><a href="#"><?= $file->titulo ?></a></h2>
            <p class="post-contenido text-justify"><?= $file->resumen ?></p>
            <div class="contenedor-botones">
              <a href="#" class="btn btn-primary">Leer Mas</a>
              <a href="#" class="btn btn-success">Comentarios<span class="badge">5</span></a>
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
