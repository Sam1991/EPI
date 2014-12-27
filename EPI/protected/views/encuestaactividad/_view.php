<?php
/* @var $this EncuestaactividadController */
/* @var $data Encuestaactividad */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('en_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->en_id), array('view', 'id'=>$data->en_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('al_rut')); ?>:</b>
	<?php echo CHtml::encode($data->al_rut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ec_convocatoria')); ?>:</b>
	<?php echo CHtml::encode($data->ec_convocatoria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('act_id')); ?>:</b>
	<?php echo CHtml::encode($data->act_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('en_tipo')); ?>:</b>
	<?php echo CHtml::encode($data->en_tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('en_pregunta1')); ?>:</b>
	<?php echo CHtml::encode($data->en_pregunta1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('en_pregunta2')); ?>:</b>
	<?php echo CHtml::encode($data->en_pregunta2); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('en_pregunta3')); ?>:</b>
	<?php echo CHtml::encode($data->en_pregunta3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('en_pregunta4')); ?>:</b>
	<?php echo CHtml::encode($data->en_pregunta4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('en_comentario')); ?>:</b>
	<?php echo CHtml::encode($data->en_comentario); ?>
	<br />

	*/ ?>

</div>