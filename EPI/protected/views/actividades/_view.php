<?php
/* @var $this ActividadesController */
/* @var $data Actividades */
?>

<div class="view">
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('act_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->act_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('act_fecha')); ?>:</b>
	<?php echo CHtml::encode($data->act_fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('act_descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->act_descripcion); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('act_horaInicio')); ?>:</b>
	<?php echo CHtml::encode($data->act_horaInicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('act_horaFin')); ?>:</b>
	<?php echo CHtml::encode($data->act_horaFin); ?>
	<br />

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('act_lugar')); ?>:</b>
	<?php echo CHtml::encode($data->act_lugar); ?>
	<br />

</div>