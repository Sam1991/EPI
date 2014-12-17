<?php
/* @var $this ConsultaController */
/* @var $model Consulta */

$this->breadcrumbs=array(
	'Consultas'=>array('index'),
	$model->con_id,
);

$this->menu=array(
	array('label'=>'List Consulta', 'url'=>array('index')),
	array('label'=>'Create Consulta', 'url'=>array('create')),
	array('label'=>'Update Consulta', 'url'=>array('update', 'id'=>$model->con_id)),
	array('label'=>'Delete Consulta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->con_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Consulta', 'url'=>array('admin')),
);
?>

<h1>View Consulta #<?php echo $model->con_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'con_id',
		'con_consulta',
		'con_email',
		'con_telefono',
		'con_fecha',
	),
)); ?>
