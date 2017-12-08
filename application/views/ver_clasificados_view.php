<section class="center-block">

    <?php
    $CI= &get_instance();
    $CI->load->model('web_model');

    if(isset($_GET['id'])){
      $clasificado = $CI->web_model->getClasificado($_GET['id']);
    } ?>
        <article class='post clearfix'>
          <h2 class="post-title"><?= $clasificado[0]['titulo'] ?></h2>
            <p class="post-contenido text-justify"><?= $clasificado[0]['descripcion'] ?></p>
            <img class="img-thumbnail thumb pull-left" src="<?php echo base_url() ."images/clasificados/{$clasificado[0]['id_clasificado']}{$clasificado[0]['imagenes']}"; ?>" alt="">
      </article>
</section>
