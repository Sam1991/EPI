<?php
/* @var $this AlumnoController */
/* @var $model Alumno */




Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#alumno-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Alumnos inscritos</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'alumno-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'al_rut',
		'al_nombre',
		'al_paterno',
		'al_materno',
		'al_email',
		'al_telefono',
		'al_carrera',
		'al_campus',
		/*
		'al_clave',
		'al_comentario',
		'al_email2',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
