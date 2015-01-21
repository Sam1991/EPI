<?php
/* @var $this ConsultainternaController */
/* @var $data Consultainterna */
?>

<div class="view">

	<div style="text-align:right;">
	<?php echo CHtml::encode($data->coni_fecha); ?>
	<br />
	<b><?php echo CHtml::encode($data->coni_email); ?></b>
	<br />
		
	</div>
	<br>
	<b><?php echo CHtml::encode($data->getAttributeLabel('coni_consulta')); ?>:</b>
	<?php echo CHtml::encode($data->coni_consulta); ?>
	<br />
	<br>
	<hr>

	<b><?php echo CHtml::encode($data->getAttributeLabel('coni_respuesta')); ?>:</b>
	<?php echo CHtml::encode($data->coni_respuesta); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('coni_fechaRespuesta')); ?>:</b>
	<?php echo CHtml::encode($data->coni_fechaRespuesta); ?>
	<br />

	*/ ?>

</div>