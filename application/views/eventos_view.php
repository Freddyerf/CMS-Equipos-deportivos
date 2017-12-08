<section class="center-block">
  <div class="miga-de-pan">
    <ol class="breadcrumb">
      <li><a href="<?= site_url('web/eventos') ?>">Eventos</a></li>
    </ol>

    <?php
    if ($eventos != null){
      $CI = &get_instance();
      $CI->load->model('Web_model');
       foreach($eventos as $file){ ?>
        <article class='post clearfix'>
            <span class="thumb pull-left">
                <img class="img-thumbnail" src="<?php echo base_url() ."images/eventos/{$file->foto}"; ?>" alt="">
            </span>
            <h2 class="post-title"><?= $file->titulo ?></h2>
            <p><span class="post-fecha"><?= $file->fecha ?></span> a las <span class="post-autor"><?= $file->hora ?></span></p>
            <p class="post-contenido text-justify"><?= $file->cuerpo ?></p>
            <div class="contenedor-botones">
              <?php if ($this->session->userdata('cedula')){
                $iduser = $CI->Web_model->getIdByCedula($this->session->userdata('cedula'));
                ?>
                <a href='<?php echo site_url("web/asistirEvento/{$iduser}/{$file->id_evento}") ?>'class="<?php echo (empty($CI->Web_model->asisteEvento($iduser,$file->id_evento))) ?'btn btn-primary':'btn btn-danger' ?>">
                  <?php echo ( empty($CI->Web_model->asisteEvento($iduser,$file->id_evento)))?'Asistir':'Darse de baja' ?>
                </a>
              <?php } ?>
              <a href="#" class="btn btn-success">Asistirán<span class="badge"><?=$CI->Web_model->numAsistirEvento($file->id_evento)?></span></a>
            </div>
      </article>
    <?php } } ?>
  </div>
  <?= $links?>
</section>
