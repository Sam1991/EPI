<?php
/* @var $this EncuestaactividadController */
/* @var $model Encuestaactividad */

$this->menu=array(
	array('label'=>'Crear Encuesta', 'url'=>array('create')),
	array('label'=>'Pasar a Excel', 'url'=>array('admin','excel'=>1)),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#encuestaactividad-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Encuestas </h1>



<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'encuestaactividad-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'al_rut',
		'en_convocatoria',
		'act_id',
		'en_tipo',
		/*
		'en_pregunta1',
		'en_pregunta2',
		'en_pregunta3',
		'en_pregunta4',
		'en_comentario',
		*/
		array(
			'class'=>'CButtonColumn',
			'template' => '{view}',
		),
	),
)); ?>
