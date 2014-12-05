<?php
/* @var $this NoticiaController */
/* @var $data Noticia */
?>

<div class="view">
	<hr>
	<img src="<?php echo Yii::app()->baseUrl.'/protected/imagenes/'.$data->no_imagen ?>" >
	<br>
	<?php echo CHtml::link(CHtml::encode($data->no_titulo), array('view', 'id'=>$data->no_id)); ?>
</div>