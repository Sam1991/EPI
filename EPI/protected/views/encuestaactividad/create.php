<?php
/* @var $this EncuestaactividadController */
/* @var $model Encuestaactividad */

$this->breadcrumbs=array(
	'Encuestaactividads'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Encuestaactividad', 'url'=>array('index')),
	array('label'=>'Manage Encuestaactividad', 'url'=>array('admin')),
);
?>

<h1>Create Encuestaactividad</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>