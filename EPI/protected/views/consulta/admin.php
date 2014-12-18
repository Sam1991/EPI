<?php
/* @var $this ConsultaController */
/* @var $model Consulta */




Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#consulta-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<h1>Consultas</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'consulta-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'con_id',
		'con_consulta',
		'con_email',
		'con_telefono',
		'con_fecha',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
