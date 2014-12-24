<?php
/* @var $this ConsultainternaController */
/* @var $model Consultainterna */

$this->menu=array(
	array('label'=>'Consultas', 'url'=>array('admin')),
);
?>

<h1>Crear consulta</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>