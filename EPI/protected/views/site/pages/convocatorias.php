
<div class="contenedor">
	<div id="principal">
			<h1 class="titulo">Convocatorias</h1>
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/convocatorias_principal.png" style="margin-bottom: 35px;">
			<p>
				Desde el <font style="color: #06cca5; font-size: 14px; font-weight: bold;"> <?php setlocale(LC_TIME, "Spanish");
				$inicio=Yii::app()->db->createCommand('select con_inicio from convocatoria where con_estado=1')->queryScalar();
														echo strftime("%d de %B de %Y",strtotime($inicio));?>
				</font> y hasta el <font style="color: #06cca5; font-size: 14px; font-weight: bold;"><?php $fin=Yii::app()->db->createCommand('select con_fin from convocatoria where con_estado=1')->queryScalar();
														echo strftime("%d de %B de %Y",strtotime($fin));?>
			</font> 

				se encuentra abierta la inscripción al Programa EPI, en campus Concepción.

				<h3>Requisitos</h3>
				-Ser alumno regular.
				<br>
				-Estar habilitado para inscribir actividad de titulación (Seminario 1 o 2, tesis, proyecto de titulo, etc.)
				<br>
				
				<h3>Beneficios</h3>
				-Capacitación certificada en innovación
				<br>
				-Convalidación como asignatura de formación integral (oferta institucional).
				<br>
				-Vinculación con empresas e instituciones.
				<br>
				-Aporte de $250.000.

				<h3>Fechas</h3>
				-Inscripciones: 22 de diciembre 2014 hasta 15 de marzo 2015.
				<br>
				-Etapa de Formación: Taller N°1, 15 marzo, de 17:00 a 20:30 horas; Taller N°2, 18 y 19 marzo, de 8:30 a 18:00 horas; Taller N°3, 23 de marzo, de 17:00 a 20:30 horas.
				<br>
				-Postulaciones proyectos/tesis innovadora: 1 abril a 21 de abril de 2015.

				<h3>Inscripciones</h3>
				Para inscribirte debes completar un breve formulario on line con tus datos. Ingresa <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=alumno/create">aquí</a> al formulario de inscripción.	
				<h3>Preguntas frecuentes</h3>
				Consulta <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=site/page&view=preguntasFrecuentes">aquí</a>
			</p>
	</div>

	<div id="segundaria"> 
		<?php $this->renderPartial('_lateral'); ?>
	</div>
</div>


