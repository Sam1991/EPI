<?php
/* @var $this AlumnoController */
/* @var $model Alumno */

//obtener convocatoria
$convocatoria= Convocatoria::model()->find("con_estado=1");

if (count(Alumno::model()->findAll("con_semestre='".$convocatoria->con_semestre."'"))>0) {
	$this->menu=array(
		array('label'=>'Pasar a Excel', 'url'=>array('admin','excel'=>1)),
		array('label'=>'Enviar Email', 'url'=>array('email')),
	);
}


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

<h1>Alumnos Inscritos</h1>

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
		'al_estado',
		'al_clave',
		/*
		'al_comentario',
		'al_email2',
		*/
		array(
			'class'=>'CButtonColumn',
			'template' => '{view} {aceptado} {rechazado}',
			'buttons'=>array(
			 	'aceptado' => array(
			 		'label'=>'Aceptado', 
			 		'url'=>"CHtml::normalizeUrl(array('aceptado','id'=>\$data->al_rut))",
			 		'imageUrl'=>Yii::app()->request->baseUrl.'/images/tick.gif', 
   					),
			 	'rechazado' => array(
			 		'label'=>'rechazado', 
			 		'url'=>"CHtml::normalizeUrl(array('rechazado','id'=>\$data->al_rut))",
			 		'imageUrl'=>Yii::app()->request->baseUrl.'/images/cross.gif', 
   					),
 			),
		),
	),
)); ?>

