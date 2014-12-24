<?php
/* @var $this EstadopostulacionController */
/* @var $model Estadopostulacion */


?>

<h1><?php echo $model->al_rut; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		// 'al_rut',
		'espos_inscripcion',
		'espos_informeInnovacion',
		'espos_anexo2',
		'espos_cartaEmpresa',
		'espos_prehallasgo',
		'espos_copiaCarnet',
		'espos_alumnoRegular',
		'espos_curriculum',
		'espos_informeFinal',
	),
)); ?>
