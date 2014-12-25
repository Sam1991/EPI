<?php
/* @var $this ProyectoController */
/* @var $model Proyecto */

$this->breadcrumbs=array(
	'Proyectos'=>array('index'),
	$model->pro_idProyecto=>array('view','id'=>$model->pro_idProyecto),
	'Update',
);

$this->menu=array(
	array('label'=>'List Proyecto', 'url'=>array('index')),
	array('label'=>'Create Proyecto', 'url'=>array('create')),
	array('label'=>'View Proyecto', 'url'=>array('view', 'id'=>$model->pro_idProyecto)),
	array('label'=>'Manage Proyecto', 'url'=>array('admin')),
);
?>

<h1>Update Proyecto <?php echo $model->pro_idProyecto; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>