<?php
/* @var $this CursoController */
/* @var $model Curso */

$this->breadcrumbs=array(
	'Cursos'=>array('index'),
	$model->cu_id=>array('view','id'=>$model->cu_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Curso', 'url'=>array('index')),
	array('label'=>'Create Curso', 'url'=>array('create')),
	array('label'=>'View Curso', 'url'=>array('view', 'id'=>$model->cu_id)),
	array('label'=>'Manage Curso', 'url'=>array('admin')),
);
?>

<h1>Update Curso <?php echo $model->cu_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>