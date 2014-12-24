<?php
/* @var $this EstadopostulacionController */
/* @var $model Estadopostulacion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'estadopostulacion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'al_rut'); ?>
		<?php echo $form->textField($model,'al_rut',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'al_rut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'espos_inscripcion'); ?>
		<?php echo $form->textField($model,'espos_inscripcion'); ?>
		<?php echo $form->error($model,'espos_inscripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'espos_informeInnovacion'); ?>
		<?php echo $form->textField($model,'espos_informeInnovacion'); ?>
		<?php echo $form->error($model,'espos_informeInnovacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'espos_anexo2'); ?>
		<?php echo $form->textField($model,'espos_anexo2'); ?>
		<?php echo $form->error($model,'espos_anexo2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'espos_cartaEmpresa'); ?>
		<?php echo $form->textField($model,'espos_cartaEmpresa'); ?>
		<?php echo $form->error($model,'espos_cartaEmpresa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'espos_prehallasgo'); ?>
		<?php echo $form->textField($model,'espos_prehallasgo'); ?>
		<?php echo $form->error($model,'espos_prehallasgo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'espos_copiaCarnet'); ?>
		<?php echo $form->textField($model,'espos_copiaCarnet'); ?>
		<?php echo $form->error($model,'espos_copiaCarnet'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'espos_alumnoRegular'); ?>
		<?php echo $form->textField($model,'espos_alumnoRegular'); ?>
		<?php echo $form->error($model,'espos_alumnoRegular'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'espos_curriculum'); ?>
		<?php echo $form->textField($model,'espos_curriculum'); ?>
		<?php echo $form->error($model,'espos_curriculum'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'espos_informeFinal'); ?>
		<?php echo $form->textField($model,'espos_informeFinal'); ?>
		<?php echo $form->error($model,'espos_informeFinal'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->