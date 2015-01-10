<?php
/* @var $this ProyectoevaluadorController */
/* @var $model Proyectoevaluador */

$this->breadcrumbs=array(
	'Proyectoevaluadors'=>array('index'),
	$model->pre_id,
);

$this->menu=array(
	array('label'=>'Autorizar/Modificar Evaluación', 'url'=>array('autorizarEvaluacion', 'id'=>$model->pre_id)),
	array('label'=>'Administrar Evaluaciones', 'url'=>array('admin')),
);
?>

<h1>Evaluación del Proyecto<?php //echo $model->pre_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'pre_id',
		//'pro_idProyecto',
		array('label'=>'TÍTULO PROYECTO',
			'type'=>'text',
			'value'=>$model->getDatos($model->pro_idProyecto, 'pro_titulo')),
		'ev_rut',
		'pre_nota',
		'pre_comentario',
		'pre_estadoPostulacion',
		//'pre_estadoEvaluacion',
	),
)); ?>
