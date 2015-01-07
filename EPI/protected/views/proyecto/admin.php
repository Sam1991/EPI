<?php
/* @var $this ProyectoController */
/* @var $model Proyecto */

$this->menu=array(
	array('label'=>'Estado Postulaciones', 'url'=>array('estadopostulacion/admin')),
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

<h1>Proyectos</h1>



<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'proyecto-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'pro_titulo',
		'pro_ambito',
		'pro_objetivoGeneral',
		'pro_profeNombre',
		'pro_emNombre',
		
		/*
		'pro_duracion',
		'pro_emContacto',
		'pro_emTelefono',
		'emEmail',
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
		'pro_metodologia',
		'pro_cartaGantt',
		*/
		array(
			'class'=>'CButtonColumn',
			'template' => '{view} {pdf}',
			'buttons'=>array(
			 	'pdf' => array(
			 		'label'=>'Generar PDF', 
			 		'url'=>"CHtml::normalizeUrl(array('pdf','id'=>\$data->pro_idProyecto))",
			 		'imageUrl'=>Yii::app()->request->baseUrl.'/images/pdf_icon.gif', 
			 		'options' => array('class'=>'pdf'),
   					),
		),
	),
))); ?>
