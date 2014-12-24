<?php
/* @var $this EstadopostulacionController */
/* @var $model Estadopostulacion */
?>

<h1>Editar estado de postulacion <?php echo $model->al_rut; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>