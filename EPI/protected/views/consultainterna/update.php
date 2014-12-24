<?php
/* @var $this ConsultainternaController */
/* @var $model Consultainterna */

$this->breadcrumbs=array(
	'Consultainternas'=>array('index'),
	$model->coni_id=>array('view','id'=>$model->coni_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Consultainterna', 'url'=>array('index')),
	array('label'=>'Create Consultainterna', 'url'=>array('create')),
	array('label'=>'View Consultainterna', 'url'=>array('view', 'id'=>$model->coni_id)),
	array('label'=>'Manage Consultainterna', 'url'=>array('admin')),
);
?>

<h1>Update Consultainterna <?php echo $model->coni_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>