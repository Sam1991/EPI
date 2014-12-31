<?php
/* @var $this ProyectoController */
/* @var $model Proyecto */
if(Yii::app()->user->isSuperAdmin){
$this->menu=array(
	array('label'=>'Proyectos', 'url'=>array('admin')),
);

}
else if(Yii::app()->user->checkAccess('alumno')){

$this->menu=array(
	array('label'=>'Editar', 'url'=>array('update', 'id'=>$model->pro_idProyecto)),
	array('label'=>'Proyectos', 'url'=>array('admin')),
	array('label'=>'Agregar participante', 'url'=>array('alumnoproyecto/create', 'idp'=>$model->pro_idProyecto)),
	
);
}
?>

<h1>Proyecto <?php echo $model->pro_titulo; ?></h1>
<?php  $data=$model;?>
<h7>1. RESÚMEN DEL PROYECTO</h7>
<br>
<h7>1.1 ALUMNO(A)</h7>

<!-- buscar los alumnos participantes -->
<?php  
	$alumnos=alumnoproyecto::model()->findAll("pro_idProyecto=".$data->pro_idProyecto);

	for ($i=0; $i<count($alumnos)  ; $i++) { 
		$alumno=alumno::model()->find("al_rut='".$alumnos[$i]->al_rut."'");
		?>
		<div class="exterior">

		<div class="nombre">
			<b><?php echo CHtml::encode($alumno->getAttributeLabel('al_nombre')); ?></b>
		</div>
		<?php echo CHtml::encode($alumno->al_nombre); ?>
		<?php echo CHtml::encode($alumno->al_paterno); ?>
		<?php echo CHtml::encode($alumno->al_materno); ?>
		<hr>

		<div class="nombre">
			<b><?php echo CHtml::encode($alumno->getAttributeLabel('al_telefono')); ?></b>
		</div>
		<?php echo CHtml::encode($alumno->al_telefono); ?>
		<hr>

		<div class="nombre">
			<b><?php echo CHtml::encode($alumno->getAttributeLabel('al_rut')); ?></b>
		</div>
		<?php echo CHtml::encode($alumno->al_rut); ?>
		<hr>


		<div class="nombre">
			<b><?php echo CHtml::encode($alumno->getAttributeLabel('al_email')); ?></b>
		</div>
		<?php echo CHtml::encode($alumno->al_email); ?>
		<hr>

		<div class="nombre">
			<b><?php echo CHtml::encode($alumno->getAttributeLabel('al_carrera')); ?></b>
		</div>
		<?php echo CHtml::encode($alumno->al_carrera); ?>
	</div>
		<br>
<?php 
	}
?>
<!-- fin_buscar los alumnos participantes -->




<div id="mostrarProyecto">
		
	<h7 >1.2 PROYECTO PROPUESTO</h7>
	<br><br>
	<div class="exterior">

		<div class="nombre">
			<b><?php echo CHtml::encode($data->getAttributeLabel('pro_titulo')); ?></b>
		</div>
		<?php echo CHtml::encode($data->pro_titulo); ?>
		<hr>

		<div class="nombre">
			<b><?php echo CHtml::encode($data->getAttributeLabel('pro_duracion')); ?></b>
		</div>
		<?php echo CHtml::encode($data->pro_duracion); ?>
		<hr>

		<div class="nombre">
			<b><?php echo CHtml::encode($data->getAttributeLabel('pro_ambito')); ?></b>
		</div>
		<?php echo CHtml::encode($data->pro_ambito); ?>
	</div>

	<br>
	<br>
	<h7 >1.3 EMPRESA O INSTITUCIÓN PATROCINANTE DEL PROYECTO</h7>
	<br><br>
	<div class="exterior">
		<div class="nombre">
			<b><?php echo CHtml::encode($data->getAttributeLabel('pro_emNombre')); ?></b>
		</div>
		<?php echo CHtml::encode($data->pro_emNombre); ?>
		<hr>

		<div class="nombre">
			<b><?php echo CHtml::encode($data->getAttributeLabel('pro_emContacto')); ?></b>
		</div>
		<?php echo CHtml::encode($data->pro_emContacto); ?>
		<hr>

		<div class="nombre">
			<b><?php echo CHtml::encode($data->getAttributeLabel('pro_emTelefono')); ?></b>
		</div>
		<?php echo CHtml::encode($data->pro_emTelefono); ?>
		<hr>
		
		<div class="nombre">
			<b><?php echo CHtml::encode($data->getAttributeLabel('emEmail')); ?></b>
		</div>
		<?php echo CHtml::encode($data->emEmail); ?>
	</div>
	<br>
	<br>
		
		<h7>1.4 PROFESOR GUÍA Y DIRECCIÓN DE ESCUELA</h7>

	<br><br>
	<div class="exterior">
	
		<div class="nombre">
			<b><?php echo CHtml::encode($data->getAttributeLabel('pro_profeNombre')); ?></b>
		</div>	
		<?php echo CHtml::encode($data->pro_profeNombre); ?>
		<hr>

		<div class="nombre">
			<b><?php echo CHtml::encode($data->getAttributeLabel('pro_profeEmail')); ?></b>
		</div>
		<?php echo CHtml::encode($data->pro_profeEmail); ?>
		<hr>

		<div class="nombre">
			<b><?php echo CHtml::encode($data->getAttributeLabel('pro_profeTelefono')); ?></b>
		</div>
		<?php echo CHtml::encode($data->pro_profeTelefono); ?>
		<hr>

		<div class="nombre">
			<b><?php echo CHtml::encode($data->getAttributeLabel('pro_dirEscuela')); ?></b>
		</div>
		<?php echo CHtml::encode($data->pro_dirEscuela); ?>
		<hr>

		<div class="nombre">
			<b><?php echo CHtml::encode($data->getAttributeLabel('pro_vBEscuela')); ?></b>
		</div>
		<?php echo CHtml::encode($data->pro_vBEscuela); ?>
	</div>

	<br><br>
	<h7>1.5 ESTRUCTURA DE COSTOS DEL PROYECTO </h7>(SI EXISTIERA APORTE DE EMPRESA/INSTITUCIÓN 
	PATROCINANTE)
	<br>
	<br>
	<div class="exterior">
		
		<div class="nombre">
			<b><?php echo CHtml::encode($data->getAttributeLabel('pro_aporteValorado')); ?></b>
		</div>
		<?php echo CHtml::encode($data->pro_aporteValorado); ?>
		<hr >
	
		<div class="nombre">
			<b><?php echo CHtml::encode($data->getAttributeLabel('pro_aportePecuniario')); ?></b>
		</div>
		<?php echo CHtml::encode($data->pro_aportePecuniario); ?>
	</div>
		<br>
		<br>	
	<h7>1.6 RESÚMEN EJECUTIVO DEL PROYECTO DE INNOVACIÓN </h7>(Máximo 7 líneas)
		<br>
	<div class="exterior">
		
		<?php echo CHtml::encode($data->pro_resumenEjecutivo); ?>
		<br> <br>
	</div>

	<br>
	<h7>2. EMPRESA PATROCINANTE</h7>
		<br>
	Describir brevemente a la empresa que patrocina el proyecto: su historia, rubro, misión y visión, 
	productos y/o servicios, clientes, posición competitiva, ubicación, etc. (Máximo una página).
	<br>
	<div class="exterior">
		
		<?php echo CHtml::encode($data->pro_descripcionEmpresa); ?>
		<br> <br>

	</div>


	<br><br>
	<h7>3. DESCRIPCIÓN DEL ANTEPROYECTO</h7>
	<br>
	<br>
	<h7>3.1 DEFINICIÓN DEL PROBLEMA U OPORTUNIDAD</h7>
	<br>
		
	Describa cuál es el problema u oportunidad que da origen al proyecto. (Máximo una página)
	<br>
	<div class="exterior">
		<?php echo CHtml::encode($data->pro_definicionProblema); ?>
		<br> <br>
	</div>
	<br><br>

	<h7>3.2 SOLUCIÓN INNOVADORA PROPUESTA </h7>
	Describa la solución innovadora que se propone para ayudar a resolver el problema u oportunidad 
	identificado. Señalar cuál es su mérito innovador. (Máximo una página).
	<br>
	<div class="exterior">
		
		<?php echo CHtml::encode($data->pro_solucionPropuesta); ?>
		<br> <br>
	</div>

	<br><br>
	<h7>3.3 ANÁLISIS DEL ESTADO DEL ARTE</h7>
	<br>
	<br>
		
	Señale qué existe en Chile y en el extranjero relacionado a la materia propuesta en la solución 
	innovadora. Indicar qué tan nueva, diferente o mejor es la innovación propuesta. Agregue fuentes 
	de información y/o links. (Máximo una página).
	<br>
	<div class="exterior">
		<?php echo CHtml::encode($data->pro_estadoArte); ?>
		<br> <br>
	</div>


	<br><br>
	<h7>3.4 OBJETIVOS DEL PROYECTO</h7>
	<br><br>
	<h7>3.4.1 OBJETIVO GENERAL</h7>
	<br>
	Qué se quiere lograr con el proyecto.
	<br>
	<div class="exterior">
		
		<?php echo CHtml::encode($data->pro_objetivoGeneral); ?>
		<br> <br>
	</div>

	<br><br>
	<h7>3.6 METODOLOGÍA</h7>
	<br>
	Señale el método de trabajo que utilizará para alcanzar los objetivos específicos planteados. 
	<br>
	¿Cómo se van a llevar a cabo los objetivos específicos?
	<br>
	<div class="exterior">
		
		<?php echo CHtml::encode($data->pro_metodologia); ?>
		<br> <br>

	</div>

		<br><br>
	<h7>3.8 CARTA GANTT </h7>
	<br>
		<b><?php echo CHtml::encode($data->getAttributeLabel('pro_cartaGantt')); ?>:</b>
	<a  href="protected\proyectos/<?php echo $model->pro_cartaGantt; ?>"> Ver </a>
		<br> <br>
	<br><br>
</div>



<style>
	#mostrarProyecto b{
		
	}

	.exterior hr{
		height: 2px;
		background:rgb(188, 188, 188);
		margin:0px;
		border-top: 0px;

	}
	h7{
		font-weight: bold;
	}	

	.exterior{
		border: solid rgb(188, 188, 188) 2px;
		text-align: left;
	}
	
	.nombre{
		display: inline-block;
		background-color: rgb(217, 217, 217);
		width: 200px;
	}
</style>

