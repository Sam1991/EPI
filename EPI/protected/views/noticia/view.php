<?php
/* @var $this NoticiaController */
/* @var $model Noticia */

$this->breadcrumbs=array(
	'Noticias'=>array('index'),
	$model->no_id,
);

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
<h3><?php echo $model->no_subtitulo; ?></h3>
<p><?php  echo $model->no_cuerpo; ?></p>

 



