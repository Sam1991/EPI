<?php
/* @var $this ProyectoController */
/* @var $model Proyecto */

$this->breadcrumbs=array(
	'Proyectos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Proyecto', 'url'=>array('index')),
	array('label'=>'Create Proyecto', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#proyecto-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Proyectos</h1>

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
	'id'=>'proyecto-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'pro_idProyecto',
		'pro_titulo',
		'pro_duracion',
		'pro_ambito',
		'pro_emNombre',
		'pro_emContacto',
		/*
		'pro_emTelefono',
		'emEmail',
		'pro_profeNombre',
		'pro_profeEmail',
		'pro_profeTelefono',
		'pro_dirEscuela',
		'pro_vBEscuela',
		'pro_aporteValorado',
		'pro_aportePecuniario',
		'pro_resumenEjecutivo',
		'pro_descripcionEmpresa',
		'pro_definicionProblema',
		'pro_solucionPropuesta',
		'pro_estadoArte',
		'pro_objetivoGeneral',
		'pro_resultadosEsperados',
		'pro_metodologia',
		'pro_cartaGantt',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
