<?php
/* @var $this EstadopostulacionController */
/* @var $model Estadopostulacion */

$this->breadcrumbs=array(
	'Estadopostulacions'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Estadopostulacion', 'url'=>array('index')),
	array('label'=>'Create Estadopostulacion', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#estadopostulacion-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Estadopostulacions</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'estadopostulacion-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'al_rut',
		'espos_inscripcion',
		'espos_informeInnovacion',
		'espos_anexo2',
		'espos_cartaEmpresa',
		'espos_prehallasgo',
		/*
		'espos_copiaCarnet',
		'espos_alumnoRegular',
		'espos_curriculum',
		'espos_informeFinal',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
