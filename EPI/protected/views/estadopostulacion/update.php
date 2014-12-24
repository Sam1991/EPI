<?php
/* @var $this EstadopostulacionController */
/* @var $model Estadopostulacion */

$this->breadcrumbs=array(
	'Estadopostulacions'=>array('index'),
	$model->al_rut=>array('view','id'=>$model->al_rut),
	'Update',
);

$this->menu=array(
	array('label'=>'List Estadopostulacion', 'url'=>array('index')),
	array('label'=>'Create Estadopostulacion', 'url'=>array('create')),
	array('label'=>'View Estadopostulacion', 'url'=>array('view', 'id'=>$model->al_rut)),
	array('label'=>'Manage Estadopostulacion', 'url'=>array('admin')),
);
?>

<h1>Update Estadopostulacion <?php echo $model->al_rut; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>