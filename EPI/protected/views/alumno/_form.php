<?php
/* @var $this AlumnoController */
/* @var $model Alumno */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'alumno-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note"><span class="required">*</span> Campos obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'al_rut'); ?>
		<?php echo $form->textField($model,'al_rut',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'al_rut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'al_nombre'); ?>
		<?php echo $form->textField($model,'al_nombre',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'al_nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'al_carrera'); ?>
		<?php echo $form->textField($model,'al_carrera',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'al_carrera'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'al_email'); ?>
		<?php echo $form->textField($model,'al_email',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'al_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'al_telefono'); ?>
		<?php echo $form->textField($model,'al_telefono',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'al_telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'al_comentario'); ?>
		<?php echo $form->textField($model,'al_comentario',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'al_comentario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'al_clave'); ?>
		<?php echo $form->textField($model,'al_clave',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'al_clave'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Inscribir' : 'Inscribir'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->