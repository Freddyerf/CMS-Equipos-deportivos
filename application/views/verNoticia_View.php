<section class="posts col-md-9">
  <div class="miga-de-pan">

    <?php
    $CI= &get_instance();
    $CI->load->model('web_model');

    if(isset($_GET['id'])){
      $noticia = $CI->web_model->getNoticia($_GET['id']);
    } ?>
        <article class='post clearfix'>
            <img class="img-thumbnail thumb pull-left" src="<?php echo base_url() ."images/noticia1.jpg"; ?>" alt="">
            <h2 class="post-title"><?= $noticia[0]['titulo'] ?></h2>
            <p class="post-contenido text-justify"><?= $noticia[0]['cuerpo'] ?></p>
      </article>

  </div>
</section>
