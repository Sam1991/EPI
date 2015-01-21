<?php
/* @var $this ActividadesController */
/* @var $model Actividades */

$this->breadcrumbs=array(
	'Actividades'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Crear Encuesta', 'url'=>array('encuestaactividad/create')),
	array('label'=>'Pasar a Excel', 'url'=>array('adminEncuestas','excel'=>2)),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#actividades-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Actividades</h1>





<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'actividades-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'con_semestre',
		'act_campus',
		'act_nombre',
		'act_fecha',
		'act_horaInicio',
		'act_horaFin',
		'act_lugar',
		'act_descripcion',
		
		array(
			'class'=>'CButtonColumn',
			'template' => '{view}',
			'buttons'=>array(
			 	'view' => array(
			 		'label'=>'view', 
			 		'url'=>"CHtml::normalizeUrl(array('viewEncuestas','id'=>\$data->act_id))",
			 		),
 			),
		),
	),
)); ?>
