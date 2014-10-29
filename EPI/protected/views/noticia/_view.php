<?php
/* @var $this NoticiaController */
/* @var $data Noticia */
?>

<div class="view">

	
	<?php echo CHtml::link(CHtml::encode($data->no_titulo), array('view', 'id'=>$data->no_id)); ?>
	<br />

	<?php echo CHtml::encode($data->no_subtitulo); ?>
	<br />

	
</div>