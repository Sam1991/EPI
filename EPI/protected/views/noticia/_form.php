<?php
/* @var $this NoticiaController */
/* @var $model Noticia */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'noticia-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'no_titulo'); ?>
		<?php echo $form->textField($model,'no_titulo',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'no_titulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no_subtitulo'); ?>
		<?php echo $form->textField($model,'no_subtitulo',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'no_subtitulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no_cuerpo'); ?>
		<?php echo $form->textField($model,'no_cuerpo',array('size'=>60,'maxlength'=>5000)); ?>
		<?php echo $form->error($model,'no_cuerpo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->