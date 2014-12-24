<?php
/* @var $this ActividadesController */
/* @var $model Actividades */

$this->breadcrumbs=array(
	'Actividades'=>array('index'),
	$model->act_id=>array('view','id'=>$model->act_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Actividades', 'url'=>array('index')),
	array('label'=>'Create Actividades', 'url'=>array('create')),
	array('label'=>'View Actividades', 'url'=>array('view', 'id'=>$model->act_id)),
	array('label'=>'Manage Actividades', 'url'=>array('admin')),
);
?>

<h1>Update Actividades <?php echo $model->act_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>