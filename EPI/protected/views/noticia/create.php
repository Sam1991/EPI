<?php
/* @var $this NoticiaController */
/* @var $model Noticia */


$this->menu=array(
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Crear noticia</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>