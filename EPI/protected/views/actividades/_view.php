<?php
/* @var $this ActividadesController */
/* @var $data Actividades */
?>

<div class="view" style="width: inherit;">
	
	<h4><?php echo CHtml::encode($data->act_nombre); ?></h4>
	Se realizara el <?php echo CHtml::encode($data->act_fecha); ?> entre las <?php echo CHtml::encode($data->act_horaInicio); ?> y las <?php echo CHtml::encode($data->act_horaFin); ?>.
	<br>
	Lugar:<?php echo CHtml::encode($data->act_lugar); ?>
	<br>
	<?php echo CHtml::encode($data->act_descripcion); ?>
	
</div>