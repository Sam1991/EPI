<?php
/* @var $this CursoController */
/* @var $data Curso */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cu_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cu_id), array('view', 'id'=>$data->cu_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cu_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->cu_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cu_creador')); ?>:</b>
	<?php echo CHtml::encode($data->cu_creador); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cu_foto')); ?>:</b>
	<?php echo CHtml::encode($data->cu_foto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cu_info')); ?>:</b>
	<?php echo CHtml::encode($data->cu_info); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('con_semestre')); ?>:</b>
	<?php echo CHtml::encode($data->con_semestre); ?>
	<br />


</div>