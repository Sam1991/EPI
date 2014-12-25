<?php
/* @var $this ProyectoController */
/* @var $model Proyecto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'proyecto-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	
<h7 >1.2 PROYECTO PROPUESTO</h7>
	

<div style="display:table">
	<div style="display:table-row">
		<div class="primeraColumna">
			<?php echo $form->label($model,'pro_titulo'); ?>
		</div>
		<div style="display:table-cell">
			<div class="row">
				<?php echo $form->textField($model,'pro_titulo',array('size'=>60,'maxlength'=>255)); ?>
				<?php echo $form->error($model,'pro_titulo'); ?>
			</div>
		</div>
	</div>

	<div style="display:table-row">
		<div class="primeraColumna">
			<?php echo $form->label($model,'pro_duracion'); ?>
		</div>
			<div style="display:table-cell">
				<div class="row2">
					<?php echo $form->textField($model,'pro_duracion',array('size'=>60,'maxlength'=>255)); ?>
					<?php echo $form->label($model,'pro_ambito'); ?>
					<?php echo $form->textField($model,'pro_ambito',array('size'=>60,'maxlength'=>255)); ?>
					<?php echo $form->error($model,'pro_duracion'); ?>
					<?php echo $form->error($model,'pro_ambito'); ?>
				</div>
			</div>
	</div>
</div>

<br>
<br>
<h7 >1.3 EMPRESA O INSTITUCIÓN PATROCINANTE DEL PROYECTO</h7>

<div style="display:table">
	<div style="display:table-row">
		<div class="primeraColumna">
			<?php echo $form->label($model,'pro_emNombre'); ?>
		</div>
		<div style="display:table-cell">
			<div class="row">
				<?php echo $form->textField($model,'pro_emNombre',array('size'=>60,'maxlength'=>255)); ?>
				<?php echo $form->error($model,'pro_emNombre'); ?>
			</div>
		</div>
	</div>

	<div style="display:table-row">
		<div class="primeraColumna">
			<?php echo $form->label($model,'pro_emContacto'); ?>
		</div>
			<div style="display:table-cell">
				<div class="row2">
					<?php echo $form->textField($model,'pro_emContacto',array('size'=>60,'maxlength'=>255)); ?>
					<?php echo $form->label($model,'pro_emTelefono'); ?>
					<?php echo $form->textField($model,'pro_emTelefono',array('size'=>60,'maxlength'=>255)); ?>
					<?php echo $form->error($model,'pro_emContacto'); ?>
					<?php echo $form->error($model,'pro_emTelefono'); ?>
				</div>
			</div>
	</div>
	<div style="display:table-row">
		<div class="primeraColumna">
		<?php echo $form->label($model,'emEmail'); ?>
		
		</div>
		<div style="display:table-cell">

	<div class="row">
		<?php echo $form->textField($model,'emEmail',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'emEmail'); ?>
	</div>
				
		</div>
	</div>
</div>


<br>
<br>
	

<h7>1.4 PROFESOR GUÍA Y DIRECCIÓN DE ESCUELA</h7>


<div style="display:table">
	<div style="display:table-row">
		<div class="primeraColumna">
		<?php echo $form->label($model,'pro_profeNombre'); ?>

		</div>
		
		<div style="display:table-cell">
			<div class="row">
				<?php echo $form->textField($model,'pro_profeNombre',array('size'=>60,'maxlength'=>255)); ?>
				<?php echo $form->error($model,'pro_profeNombre'); ?>
			</div>
		</div>
	</div>

	<div style="display:table-row">
		<div class="primeraColumna">
			<?php echo $form->label($model,'pro_profeEmail'); ?>
		</div>
		
		<div style="display:table-cell">
			<div class="row2">
				<?php echo $form->textField($model,'pro_profeEmail',array('size'=>60,'maxlength'=>255)); ?>
				<?php echo $form->label($model,'pro_profeTelefono'); ?>
				<?php echo $form->textField($model,'pro_profeTelefono',array('size'=>60,'maxlength'=>255)); ?>
				<?php echo $form->error($model,'pro_profeEmail'); ?>
				<?php echo $form->error($model,'pro_profeTelefono'); ?>
			</div>
		</div>
	</div>
	
	<div style="display:table-row">
		<div class="primeraColumna">
		
		<?php echo $form->label($model,'pro_dirEscuela'); ?>
		</div>
		
		<div style="display:table-cell">
				
	<div class="row2">
		<?php echo $form->textField($model,'pro_dirEscuela',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->label($model,'pro_vBEscuela'); ?>
		<?php echo $form->textField($model,'pro_vBEscuela',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pro_dirEscuela'); ?>
		<?php echo $form->error($model,'pro_vBEscuela'); ?>
	</div>
		</div>
	</div>
</div>			



	<br><br>

<h7>1.5 ESTRUCTURA DE COSTOS DEL PROYECTO </h7>(SI EXISTIERA APORTE DE EMPRESA/INSTITUCIÓN 

PATROCINANTE)
	<div class="row4">
		<?php echo $form->label($model,'pro_aporteValorado'); ?>
		<?php echo $form->textField($model,'pro_aporteValorado'); ?>
		<?php echo $form->label($model,'pro_aportePecuniario'); ?>
		<?php echo $form->textField($model,'pro_aportePecuniario'); ?>
		<?php echo $form->error($model,'pro_aporteValorado'); ?>
		<?php echo $form->error($model,'pro_aportePecuniario'); ?>
	</div>
	
	<br>
	<br>	

<h7>1.6 RESÚMEN EJECUTIVO DEL PROYECTO DE INNOVACIÓN </h7>(Máximo 7 líneas)
	<br>

	<div class="row">
		<?php echo $form->textArea($model,'pro_resumenEjecutivo',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'pro_resumenEjecutivo'); ?>
	</div>

	<br>
	<br>

	<h7>2. EMPRESA PATROCINANTE</h7>
	<br>

Describir brevemente a la empresa que patrocina el proyecto: su historia, rubro, misión y visión, 

productos y/o servicios, clientes, posición competitiva, ubicación, etc. (Máximo una página).

	<div class="row">
		<?php echo $form->textArea($model,'pro_descripcionEmpresa',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'pro_descripcionEmpresa'); ?>
	</div>

<br><br>
<h7>3. DESCRIPCIÓN DEL ANTEPROYECTO</h7>
<br>
<br>
<h7>3.1 DEFINICIÓN DEL PROBLEMA U OPORTUNIDAD</h7>
<br>
Describa cuál es el problema u oportunidad que da origen al proyecto. (Máximo una página)
	<div class="row">
		<?php echo $form->textArea($model,'pro_definicionProblema',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'pro_definicionProblema'); ?>
	</div>
<br><br>

<h7>3.2 SOLUCIÓN INNOVADORA PROPUESTA </h7>
Describa la solución innovadora que se propone para ayudar a resolver el problema u oportunidad 
identificado. Señalar cuál es su mérito innovador. (Máximo una página).
	<div class="row">
		<?php echo $form->textArea($model,'pro_solucionPropuesta',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'pro_solucionPropuesta'); ?>
	</div>
<br><br>

<h7>3.3 ANÁLISIS DEL ESTADO DEL ARTE</h7>
<br>
<br>
Señale qué existe en Chile y en el extranjero relacionado a la materia propuesta en la solución 
innovadora. Indicar qué tan nueva, diferente o mejor es la innovación propuesta. Agregue fuentes 
de información y/o links. (Máximo una página).
	<div class="row">
		<?php echo $form->textArea($model,'pro_estadoArte',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'pro_estadoArte'); ?>
	</div>

<br><br>
<h7>3.4 OBJETIVOS DEL PROYECTO</h7>
<br><br>
<h7>3.4.1 OBJETIVO GENERAL</h7>
<br>
Qué se quiere lograr con el proyecto.
	<div class="row">
		<?php echo $form->textArea($model,'pro_objetivoGeneral',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'pro_objetivoGeneral'); ?>
	</div>

<br><br>
<h7>3.6 METODOLOGÍA</h7>
<br>
Señale el método de trabajo que utilizará para alcanzar los objetivos específicos planteados. 
<br>
¿Cómo se van a llevar a cabo los objetivos específicos?
	<div class="row">
		<?php echo $form->textArea($model,'pro_metodologia',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'pro_metodologia'); ?>
	</div>
	<br><br>
<h7>3.8 CARTA GANTT </h7>
	<div class="row">
		<?php echo $form->fileField($model,'no_imagen'); ?>
		<?php echo $form->error($model,'pro_cartaGantt'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->


<style>

.primeraColumna{
	display:table-cell;
	width:30%;
	background-color:#d9d9d9;
}
h7{
	font-weight: bold;
}	

#proyecto-form div.row,div.row2{
text-align: right;	
}

</style>