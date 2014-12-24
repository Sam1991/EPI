<?php
/* @var $this EstadopostulacionController */
/* @var $model Estadopostulacion */

$this->breadcrumbs=array(
	'Estadopostulacions'=>array('index'),
	$model->al_rut,
);

$this->menu=array(
	array('label'=>'List Estadopostulacion', 'url'=>array('index')),
	array('label'=>'Create Estadopostulacion', 'url'=>array('create')),
	array('label'=>'Update Estadopostulacion', 'url'=>array('update', 'id'=>$model->al_rut)),
	array('label'=>'Delete Estadopostulacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->al_rut),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Estadopostulacion', 'url'=>array('admin')),
);
?>

<h1>View Estadopostulacion #<?php echo $model->al_rut; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'al_rut',
		'espos_inscripcion',
		'espos_informeInnovacion',
		'espos_anexo2',
		'espos_cartaEmpresa',
		'espos_prehallasgo',
		'espos_copiaCarnet',
		'espos_alumnoRegular',
		'espos_curriculum',
		'espos_informeFinal',
	),
)); ?>
