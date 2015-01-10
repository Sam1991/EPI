<?php
/* @var $this ProyectoevaluadorController */
/* @var $model Proyectoevaluador */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'proyectoevaluador-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
)); ?>

	<?php //echo $form->errorSummary($model); ?>

	<div class="row">
		<?php //echo $form->labelEx($model,'pro_idProyecto'); ?>
		<?php //echo $form->textField($model,'pro_idProyecto'); ?>
		<?php //echo $form->error($model,'pro_idProyecto'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'ev_rut'); ?>
		<?php //echo $form->textField($model,'ev_rut',array('size'=>15,'maxlength'=>15)); ?>
		<?php //echo $form->error($model,'ev_rut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pre_nota'); ?>
		<?php echo $form->textField($model,'pre_nota',array('placeholder'=>'Del 10 al 70')); ?>
		<?php echo $form->error($model,'pre_nota'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pre_comentario'); ?>
		<?php echo $form->textArea($model,'pre_comentario',array('rows'=>8, 'cols'=>50)); ?>
		<?php echo $form->error($model,'pre_comentario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pre_estadoPostulacion'); ?>
		<?php echo $form->dropDownList($model,'pre_estadoPostulacion',array(''=>'','Aprobado'=>'Aprobado','Aprobado con Reformulacion'=>'Aprobado con Reformulación','Reprobado'=>'Reprobado')); ?>
		<?php echo $form->error($model,'pre_estadoPostulacion'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'pre_estadoEvaluacion'); ?>
		<?php //echo $form->textField($model,'pre_estadoEvaluacion',array('size'=>25,'maxlength'=>25)); ?>
		<?php //echo $form->error($model,'pre_estadoEvaluacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Autorizar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->