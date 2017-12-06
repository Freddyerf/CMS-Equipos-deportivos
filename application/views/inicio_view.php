  <section class="posts col-md-9">
    <div class="miga-de-pan">
      <ol class="breadcrumb">
        <li><a href="#">Inicio</a></li>
      </ol>

      <?php
      $CI= &get_instance();
      $CI->load->model('web_model');
      $files = $CI->web_model->mostrarNoticias();
      $count = 5;?>
        <?php foreach($files as $file){ if($count!=0){?>
          <article class='post clearfix'>
              <a href="<?= site_url('web/verNoticias') ?>" class="thumb pull-left">
                  <img class="img-thumbnail" src="<?php echo base_url() ."images/noticia1.jpg"; ?>" alt="">
              </a>
              <h2 class="post-title"><a href="<?= site_url('web/verNoticias') ?>"><?= $file->titulo ?></a></h2>
              <p class="post-contenido text-justify"><?= $file->resumen ?></p>
              <div class="contenedor-botones">
                <a href="<?= site_url('web/verNoticias') ?>" class="btn btn-primary">Leer Mas</a>
                <a href="<?= site_url('web/verNoticias') ?>" class="btn btn-success">Comentarios<span class="badge">5</span></a>
              </div>
        </article>
      <?php $count = $count -1; } } ?>
    </div>
  </section>

      <div class="col-xs-2 col-xs-offset-0">
        <div class="row">
          <table class="table table-bordered">
            <thead>
              <tr>Eventos cercanos</tr>
            </thead>
            <tbody>
              <tr>
                <td>Evento Validación</td>
              </tr>
              <tr>
                <td>Evento Clasificatoria</td>
              </tr>
              <tr>
                <td>Evento Semifinal</td>
              </tr>
              <tr>
                <td>Evento Final</td>
              </tr>
              <tr>
                <td>Evento Fiesta</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="row">
          <table class="table table-bordered">
            <thead>
              <tr>Anuncios Clasificados</tr>
            </thead>
            <tbody>
              <tr>
                <td>Gatorade</td>
              </tr>
              <tr>
                <td>Cool Heaven</td>
              </tr>
              <tr>
                <td>Coca Cola</td>
              </tr>
              <tr>
                <td>Clorets</td>
              </tr>
              <tr>
                <td>Memerize</td>
              </tr>
            </tbody>
          </table>
        </div>

      </div>
    </div>
  </div>
</div>
