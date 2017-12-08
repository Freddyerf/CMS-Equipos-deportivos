<section class="center-block">

    <?php
    $CI= &get_instance();
    $CI->load->model('web_model');
    
    if(isset($_GET['id'])){
      $noticia = $CI->web_model->getNoticia($_GET['id']);
      $comentarios = $CI->web_model->getComentarios($_GET['id']);
    } ?>
        <article class='post clearfix'>
          <h2 class="post-title"><?= $noticia[0]['titulo'] ?></h2>
            <img class="img-thumbnail thumb pull-left" src="<?php echo base_url() ."images/noticias/{$noticia[0]['id_noticia']}{$noticia[0]['foto']}"; ?>" alt="">
            <p class="post-contenido text-justify"><?= $noticia[0]['cuerpo'] ?></p>
      </article>
      <table class="table">
        <thead>
          <tr>
            <th>Comentarios</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php
            if($comentarios != null){
              foreach($comentarios as $comentario){
                  echo "
                      <tr>
                        <td><p>"
                        .$comentario['comentario']
                        ."</p></td>
                      </tr>
                  ";
              }
            }else{
              echo "
                  <tr>
                    <td><p>
                      No hay comentarios disponibles para esta noticia.
                    </p></td>
                  </tr>
              ";
            }
            echo "
                <tr>
                  <td><p>
                  <input type='textarea' placeholder='Escribe tu comentario aquí' value ='' name='newComentario' class='form-control'/>
                  </p></td>
                  <td><a href=" .site_url('web/verNoticias') ."?id=" .$noticia[0]['id_noticia'] ." class='btn btn-primary'>Publicar</a></td>
                </tr>
            ";
          ?>
        </tbody>
      </table>
</section>
