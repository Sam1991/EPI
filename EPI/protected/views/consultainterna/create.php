<?php
/* @var $this ConsultainternaController */
/* @var $model Consultainterna */

$this->breadcrumbs=array(
	'Consultainternas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Consultainterna', 'url'=>array('index')),
	array('label'=>'Manage Consultainterna', 'url'=>array('admin')),
);
?>

<h1>Create Consultainterna</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>