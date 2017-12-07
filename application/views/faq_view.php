<div class="container ">
    <h2>Preguntas frecuentes:</h2>

		<div class="panel-group" id="faqAccordion">
		<?php
		$CI= &get_instance();
		$CI->load->model('web_model');
		$i = 0;
		$files = $CI->web_model->mostrarFAQ(); ?>
			<?php foreach($files as $file){ ?>

				<div class="panel panel-default ">
						<div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question<?= $i ?>">
								 <h4 class="panel-title">
										<a href="#" class="ing"><?= $file->pregunta ?></a>
							</h4>

						</div>
						<div id="question<?= $i ?>" class="panel-collapse collapse" style="height: 0px;">
								<div class="panel-body">
										 <h5><span class="label label-primary">Respuesta</span></h5>
										<p><?= $file->respuesta ?></p>
								</div>
						</div>
				</div>

			<?php $i++; } ?>

    </div>
    <!--/panel-group-->
</div>
