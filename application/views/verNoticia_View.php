<section class="center-block">

    <?php
    $CI= &get_instance();
    $CI->load->model('web_model');

    if(isset($_GET['id'])){
      $noticia = $CI->web_model->getNoticia($_GET['id']);
    } ?>
        <article class='post clearfix'>
          <h2 class="post-title"><?= $noticia[0]['titulo'] ?></h2>
            <img class="img-thumbnail thumb pull-left" src="<?php echo base_url() ."images/noticia1.jpg"; ?>" alt="">
            <p class="post-contenido text-justify"><?= $noticia[0]['cuerpo'] ?></p>
      </article>
</section>
