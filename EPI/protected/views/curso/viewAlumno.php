<?php
/* @var $this CursoController */
/* @var $model Curso */

$this->menu=array(
	array('label'=>'List Curso', 'url'=>array('index')),
	array('label'=>'Create Curso', 'url'=>array('create')),
	array('label'=>'Update Curso', 'url'=>array('update', 'id'=>$model->cu_id)),
	array('label'=>'Delete Curso', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cu_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Curso', 'url'=>array('admin')),
);
?>

	<div style="text-align:center">
		<h1><?php echo $model->cu_nombre; ?></h1>
	</div>


<!--
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cu_id',
		'cu_nombre',
		'cu_creador',
		'cu_foto',
		'cu_info',
		'con_semestre',
	),
)); ?>
-->
<div style="width: 270px;margin-left:20px;display:inline-block;margin-left:90px;">
	<h2>Creador curso</h2>
	<?php 
	$estructura =Yii::app()->baseUrl.'/protected/cursos';
	$path="$estructura/$model->cu_foto";
	 ?>
	<img src="<?php echo $path?>" style="border-radius: 50% 50% 50% 50%;">
	<br>
	<br>
	<hr>
	<h2>Información curso</h2>
	<?php echo $model->cu_info ?>

</div>

<div style="display:inline-block;width:740px;vertical-align:top;margin:20px;margin-top:50px;">
		<h2 class="tituloPrincipal">Documentos</h2>
	<div style="background-color:#FFFFFF;box-shadow:0 1px 2px rgba(0,0,0,0.5);">

<table >
	
		<?php $this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProviderDocumentos,
		'itemView'=>'_viewDocumentos',
		)); ?>
</table>
		
	</div>
</div>


<div style="width: 270px;display:inline-block;vertical-align:top;">
	
	<h2 >Comentarios</h2>
	
	<div style="background-color: #f9f9f9;">
		<?php $this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProviderConsulta,
		'itemView'=>'_viewConsulta',
		)); ?>
		
	</div>


<!--
	<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>Curso::model()->findAll(),
	'attributes'=>array(
		'coni_consulta',
		'coni_fecha',
		'coni_respuesta',
		'coni_fechaRespuesta',
	),
)); ?>
-->
</div>

<style>
.summary{
	display: none;
	
}

</style>