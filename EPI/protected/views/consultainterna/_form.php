<?php
/* @var $this ConsultainternaController */
/* @var $model Consultainterna */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'consultainterna-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	

	<!-- obtener datos del usuario activo -->
	<?php  
		$alumno=alumno::model()->find("al_rut='".Yii::app()->user->name."'");
	?>
	<!-- fin_obtener datos del usuario activo -->

	<div class="row">
		<?php //echo $form->labelEx($model,'coni_consulta'); ?>
		<?php echo $form->textArea($model,'coni_consulta',array('rows'=>6, 'cols'=>50, 'placeholder'=>'Consulta')); ?>
		<?php echo $form->error($model,'coni_consulta'); ?>
	</div>
	<div class="row">
		<?php //echo $form->labelEx($model,'coni_email'); ?>
		<?php echo $form->textField($model,'coni_email',array('size'=>60,'maxlength'=>255,'value'=>$alumno->al_email,'readonly'=>'false')); ?>
		<?php echo $form->error($model,'coni_email'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'coni_telefono'); ?>
		<?php echo $form->textField($model,'coni_telefono',array('size'=>60,'maxlength'=>255,'value'=>$alumno->al_telefono,'readonly'=>'false')); ?>
		<?php echo $form->error($model,'coni_telefono'); ?>
	</div>


	<div class="row">
		<?php //echo $form->labelEx($model,'coni_fecha'); ?>
		<?php echo $form->textField($model,'coni_fecha', array('value'=>date('Y-m-d H:i:s'),'readonly'=>'false')); ?>
		<?php echo $form->error($model,'coni_fecha'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'coni_estado'); ?>
		<?php echo $form->textField($model,'coni_estado'); ?>
		<?php echo $form->error($model,'coni_estado'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'coni_respuesta'); ?>
		<?php echo $form->textArea($model,'coni_respuesta',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'coni_respuesta'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'coni_fechaRespuesta'); ?>
		<?php echo $form->textField($model,'coni_fechaRespuesta'); ?>
		<?php echo $form->error($model,'coni_fechaRespuesta'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Enviar' : 'Responder'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->