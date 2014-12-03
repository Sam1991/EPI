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

	<!-- <p class="note">Fields with <span class="required">*</span> are required.</p> -->

	<?php echo $form->errorSummary($model); ?>

	
	<div class="row">
		<?php //echo $form->labelEx($model,'al_nombre'); ?>
		<?php echo $form->textField($model,'al_nombre',array('size'=>60,'maxlength'=>100,'placeholder'=>'Nombre')); ?>
		<?php echo $form->error($model,'al_nombre'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'al_paterno'); ?>
		<?php echo $form->textField($model,'al_paterno',array('size'=>60,'maxlength'=>100,'placeholder'=>'Apellido Paterno')); ?>
		<?php echo $form->error($model,'al_paterno'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'al_materno'); ?>
		<?php echo $form->textField($model,'al_materno',array('size'=>60,'maxlength'=>100,'placeholder'=>'Apellido Materno')); ?>
		<?php echo $form->error($model,'al_materno'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'al_rut'); ?>
		<?php echo $form->textField($model,'al_rut',array('size'=>15,'maxlength'=>15,'placeholder'=>'RUT')); ?>
		<?php echo $form->error($model,'al_rut'); ?>
	</div>

	

	<div class="row">
		<?php //echo $form->labelEx($model,'al_carrera'); ?>
		<?php echo $form->textField($model,'al_carrera',array('size'=>60,'maxlength'=>100,'placeholder'=>'Carrera')); ?>
		<?php echo $form->error($model,'al_carrera'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'al_campus'); ?>
		<?php echo $form->textField($model,'al_campus',array('size'=>60,'maxlength'=>100,'placeholder'=>'Campus')); ?>
		<?php echo $form->error($model,'al_campus'); ?>
	</div>
	<div class="row">
		<?php //echo $form->labelEx($model,'al_email'); ?>
		<?php echo $form->textField($model,'al_email',array('size'=>30,'maxlength'=>30,'placeholder'=>'e-mail 1(ubiobio)')); ?>
		<?php echo $form->error($model,'al_email'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'al_email2'); ?>
		<?php echo $form->textField($model,'al_email2',array('size'=>30,'maxlength'=>30,'placeholder'=>'e-mail 2(opcional)')); ?>
		<?php echo $form->error($model,'al_email2'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'al_telefono'); ?>
		<?php echo $form->textField($model,'al_telefono',array('size'=>25,'maxlength'=>25,'placeholder'=>'Telefono')); ?>
		<?php echo $form->error($model,'al_telefono'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'al_comentario'); ?>
		<?php echo $form->textArea($model,'al_comentario',array('size'=>60,'maxlength'=>100,'placeholder'=>'Motivación para ingresar al programa EPI (deseable incluir posible tema del proyecto de titulo y nombre de empresa o institución asociada al tema)')); ?>
		<?php echo $form->error($model,'al_comentario'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'al_clave'); ?>
		<?php echo $form->textField($model,'al_clave',array('size'=>60,'maxlength'=>100,'placeholder'=>'Clave de acceso')); ?>
		<?php echo $form->error($model,'al_clave'); ?>
	</div>



	<div id="centrado">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Enviar' : 'Guardar',array('class' => 'guardar')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->