<?php
/* @var $this ConsultainternaController */
/* @var $model Consultainterna */


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#consultainterna-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Consultas internas</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'consultainterna-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'coni_id',
		'coni_consulta',
		'coni_telefono',
		'coni_email',
		'coni_fecha',
		'coni_estado',
		'coni_respuesta',
		'coni_fechaRespuesta',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
