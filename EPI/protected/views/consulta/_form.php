<?php
/* @var $this ConsultaController */
/* @var $model Consulta */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'consulta-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<!-- <p class="note">Fields with <span class="required">*</span> are required.</p> -->

	

	<div class="row">
		
		<?php echo $form->textArea($model,'con_consulta',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'con_consulta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'con_email'); ?>
		<?php echo $form->textField($model,'con_email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'con_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'con_telefono'); ?>
		<?php echo $form->textField($model,'con_telefono',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'con_telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'con_fecha'); ?>
		<?php echo $form->textField($model,'con_fecha'); ?>
		<?php echo $form->error($model,'con_fecha'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Enviar' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->