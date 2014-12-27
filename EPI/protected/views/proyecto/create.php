<?php
/* @var $this ProyectoController */
/* @var $model Proyecto */

$this->menu=array(
	array('label'=>'Proyectos', 'url'=>array('admin')),
);
?>

<h1>Crear proyecto</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>