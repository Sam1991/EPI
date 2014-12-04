
<div class="contenedor">
	<div id="principal">
		<div style="margin-left: 52px;">
			<h1 class="titulo" style="margin-top: 59px;">Convocatorias</h1>
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/convocatorias_principal.png" style="margin-bottom: 35px;">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/convocatorias_texto.png" style="margin-bottom: 15px;">		
		</div>
	</div>

	<div id="segundaria"> 
		<?php  
			$imageUrl = "".Yii::app()->request->baseUrl."/images/convocatorias-inscribete.png";
			$image = '<img src="'.$imageUrl.'" style="margin-bottom: 35px;" >';
			echo CHtml::link($image, array('/alumno/create'));
		?>
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/convocatorias_facebook.png" style="margin-bottom: 10px;">
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/convocatorias_twitter.png" style="margin-bottom: 10px;">
	</div>
</div>


