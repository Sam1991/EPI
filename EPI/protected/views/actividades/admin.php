<?php
/* @var $this ActividadesController */
/* @var $model Actividades */

$this->breadcrumbs=array(
	'Actividades'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Crear Actividad', 'url'=>array('create')),
	array('label'=>'Convocatorias', 'url'=>array('convocatoria/admin')),
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
		//'con_semestre',
		'act_nombre',
		'act_campus',
		'act_fecha',
		'act_horaInicio',
		'act_horaFin',
		'act_lugar',
		'act_descripcion',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
