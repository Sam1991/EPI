<?php
/* @var $this ActividadesController */
/* @var $model Actividades */

$this->breadcrumbs=array(
	'Actividades'=>array('index'),
	$model->act_id,
);

$this->menu=array(
	array('label'=>'List Actividades', 'url'=>array('index')),
	array('label'=>'Create Actividades', 'url'=>array('create')),
	array('label'=>'Update Actividades', 'url'=>array('update', 'id'=>$model->act_id)),
	array('label'=>'Delete Actividades', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->act_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Actividades', 'url'=>array('admin')),
);
?>

<h1>View Actividades #<?php echo $model->act_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'act_id',
		'act_convocatoria',
		'act_campus',
		'act_nombre',
		'act_fecha',
		'act_horaInicio',
		'act_horaFin',
		'act_lugar',
		'act_descripcion',
	),
)); ?>
