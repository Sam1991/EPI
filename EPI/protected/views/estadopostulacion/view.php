<?php
/* @var $this EstadopostulacionController */
/* @var $model Estadopostulacion */

$this->menu=array(
	array('label'=>'Proyecto', 'url'=>array('proyecto/admin')),
	array('label'=>'Subir Archivos', 'url'=>array('estadopostulacion/update', 'id'=>Yii::app()->user->name)),
);

?>

<h1><?php echo $model->al_rut; ?></h1>


<div class="estado">

<?php 
if($model->espos_inscripcion!=null){
	?>
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/estado/inscripcion.png" class="completo">
<?php 
}
else{
 ?>
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/estado/inscripcion.png" class="incompleto">

<?php 
}
  ?>
<label >Inscripción</label>
</div>

<div class="estado">
<?php 
if($model->espos_informeInnovacion!=null){
	?>
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/estado/informeInnovacion.png" class="completo">
<?php 
}
else{
 ?>
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/estado/informeInnovacion.png" class="incompleto">

<?php 
}
  ?>
  <label >Informe innovacion</label>
</div>

<div class="estado">
<?php 
if($model->espos_anexo2!=null){
	?>
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/estado/anexo2.png" class="completo">
<?php 
}
else{
 ?>
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/estado/anexo2.png" class="incompleto">

<?php 
}
  ?>
 <label >Anexo 2</label>
</div>


<div class="estado">
<?php 
if($model->espos_cartaEmpresa!=null){
	?>
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/estado/cartaEmpresa.png" class="completo">
<?php 
}
else{
 ?>
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/estado/cartaEmpresa.png" class="incompleto">

<?php 
}
  ?>
 <label >Carta empresa</label>
</div>




<div class="estado">
<?php 
if($model->espos_prehallasgo!=null){
	?>
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/estado/prehallasgo.png" class="completo">
<?php 
}
else{
 ?>
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/estado/prehallasgo.png" class="incompleto">

<?php 
}
  ?>
 <label >Informe prehallasgo</label>
</div>




<div class="estado">
<?php 
if($model->espos_copiaCarnet!=null){
	?>
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/estado/copiaCarnet.png" class="completo">
<?php 
}
else{
 ?>
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/estado/copiaCarnet.png" class="incompleto">

<?php 
}
  ?>
 <label >Copia carnet</label>
</div>




<div class="estado">
<?php 
if($model->espos_alumnoRegular!=null){
	?>
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/estado/alumnoRegular.png" class="completo">
<?php 
}
else{
 ?>
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/estado/alumnoRegular.png" class="incompleto">

<?php 
}
  ?>
 <label >Certificado alumno regular</label>
</div>


<div class="estado">
<?php 
if($model->espos_curriculum!=null){
	?>
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/estado/curriculum.png" class="completo">
<?php 
}
else{
 ?>
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/estado/curriculum.png" class="incompleto">

<?php 
}
  ?>
 <label >Curriculum</label>
</div>


<div class="estado">
<?php 
if($model->espos_informeFinal!=null){
	?>
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/estado/informeFinal.png" class="completo">
<?php 
}
else{
 ?>
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/estado/informeFinal.png" class="incompleto">

<?php 
}
  ?>
 <label >Informe final</label>
</div>

<style>
	
.completo{
	border-radius: 180px;
	overflow: hidden;
	border-width: 9px;
	border-style: solid;
	border-color: #00a49d;
	width: 110px;
	height: 110px;
}

.incompleto{
-webkit-filter: blur(5px);
border-radius: 180px;
overflow: hidden;
border-width: 9px;
border-style: solid;
border-color: #d6d4d8;
width: 110px;
height: 110px;
}

.estado{
	display: inline-block;
	text-align: center;
}

.estado img{
	display: block;
}

</style>


