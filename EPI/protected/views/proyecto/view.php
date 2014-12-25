<?php
/* @var $this ProyectoController */
/* @var $model Proyecto */

$this->breadcrumbs=array(
	'Proyectos'=>array('index'),
	$model->pro_idProyecto,
);

$this->menu=array(
	array('label'=>'List Proyecto', 'url'=>array('index')),
	array('label'=>'Create Proyecto', 'url'=>array('create')),
	array('label'=>'Update Proyecto', 'url'=>array('update', 'id'=>$model->pro_idProyecto)),
	array('label'=>'Delete Proyecto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pro_idProyecto),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Proyecto', 'url'=>array('admin')),
);
?>

<h1>View Proyecto #<?php echo $model->pro_idProyecto; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pro_idProyecto',
		'pro_titulo',
		'pro_duracion',
		'pro_ambito',
		'pro_emNombre',
		'pro_emContacto',
		'pro_emTelefono',
		'emEmail',
		'pro_profeNombre',
		'pro_profeEmail',
		'pro_profeTelefono',
		'pro_dirEscuela',
		'pro_vBEscuela',
		'pro_aporteValorado',
		'pro_aportePecuniario',
		'pro_resumenEjecutivo',
		'pro_descripcionEmpresa',
		'pro_definicionProblema',
		'pro_solucionPropuesta',
		'pro_estadoArte',
		'pro_objetivoGeneral',
		'pro_resultadosEsperados',
		'pro_metodologia',
		'pro_cartaGantt',
	),
)); ?>
