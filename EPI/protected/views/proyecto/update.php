<?php
/* @var $this ProyectoController */
/* @var $model Proyecto */

$this->breadcrumbs=array(
	'Proyectos'=>array('index'),
	$model->pro_idProyecto=>array('view','id'=>$model->pro_idProyecto),
	'Update',
);

$this->menu=array(
	array('label'=>'Ver proyecto', 'url'=>array('view', 'id'=>$model->pro_idProyecto)),
	array('label'=>'Proyecto', 'url'=>array('admin')),
);
?>

<h1>Editar proyecto: <?php echo $model->pro_titulo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>