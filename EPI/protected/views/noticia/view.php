<?php
/* @var $this NoticiaController */
/* @var $model Noticia */


$this->menu=array(
	array('label'=>'List Noticia', 'url'=>array('index')),
	array('label'=>'Create Noticia', 'url'=>array('create')),
	array('label'=>'Update Noticia', 'url'=>array('update', 'id'=>$model->no_id)),
	array('label'=>'Delete Noticia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->no_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Noticia', 'url'=>array('admin')),
);
?>

<!-- <h1>View Noticia #<?php echo $model->no_id; ?></h1> -->

<h1><?php echo $model->no_titulo;?></h1>

<div style="float: left;width: 500px;margin-right: 30px;max-height: 500px;overflow: hidden;">
	<img src="<?php echo Yii::app()->baseUrl.'/protected/imagenes/'.$model->no_imagen ?>" style="width: 500px;">
</div>
<h3 style="color: #09c7a2;"><?php echo $model->no_subtitulo; ?></h3>
<p  style="margin-right: 49px;text-align: justify;min-height: 448px;"><?php  echo $model->no_cuerpo; ?></p>

 <?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view2',
	'template'=>"{pager}\n{items}" //THIS DOES WHAT YOU WANT
	)); ?>



