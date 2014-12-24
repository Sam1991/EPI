<?php
/* @var $this ConsultainternaController */
/* @var $model Consultainterna */

$this->breadcrumbs=array(
	'Consultainternas'=>array('index'),
	$model->coni_id,
);

$this->menu=array(
	array('label'=>'List Consultainterna', 'url'=>array('index')),
	array('label'=>'Create Consultainterna', 'url'=>array('create')),
	array('label'=>'Update Consultainterna', 'url'=>array('update', 'id'=>$model->coni_id)),
	array('label'=>'Delete Consultainterna', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->coni_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Consultainterna', 'url'=>array('admin')),
);
?>

<h1>View Consultainterna #<?php echo $model->coni_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'coni_id',
		'coni_consulta',
		'coni_telefono',
		'coni_email',
		'coni_fecha',
		'coni_estado',
		'coni_respuesta',
		'coni_fechaRespuesta',
	),
)); ?>
