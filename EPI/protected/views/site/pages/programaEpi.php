<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div class="contenedor">
	<div id="principal">
		<div class="descripcion" style="margin-left: 52px;margin-top: 59px;">
			<h1 class="titulo" >¿Qué es el Programa EPI?</h1>
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/programaEpi_principal.png" style="margin-bottom: 35px;">
			<!-- <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/convocatorias_texto.png" style="margin-bottom: 15px;">	 -->	


<p>			

El Programa de Innovación para Estudiantes de Pregrado de la Universidad del Bío-Bío, que hemos denominado "Estudiantes para Innovar" (EPI), se desarrolla en el marco del Convenio de Desempeño de Apoyo a la Innovación en Educación Superior "Hábitat Sustentable" (CD INES), que financia el Ministerio de Educación y en el marco del proyecto "Plataforma de Innovación Articulada con la Estructura Curricular de los Estudiantes de la Universidad del Bío-Bío" que financia el Gobierno Regional a través de los Fondos de Innovación para la Competitividad Regional (FIC).
<br>
<br>

Busca como objetivo insertar a los alumnos de pregrado en el Modelo de Innovación de la Universidad del Bío-Bío y prepararlos para que puedan idear, formular y desarrollar proyectos de innovación vinculados con necesidades de empresas, instituciones y comunidades. Y está dirigido, principalmente, a alumnos habilitados para inscribir actividad de titulación.
<br>
<br>
El Programa EPI está dividido en dos etapas: Etapa de Formación y Etapa de Desarrollo de Proyectos de Innovación. En la primera etapa los alumnos ingresas a una capacitación de primer nivel en innovación que será certificada por la Universidad. En la segunda etapa los alumnos pueden postular sus proyectos o tesis innovadoras y recibir un aporte de $250.000. Los proyectos deben alcanzar como resultados alguna de estas opciones: Pre hallazgo; Emprendimiento; Postulaciones a fondos de innovación emprendedora o tesis innovadora.

<h3>Beneficios</h3>
Los estudiantes que ingresen al Programa EPI pueden recibir los siguientes beneficios:
<br>
- Capacitación y certificación en innovación.
<br>
- Convalidación como asignatura de formación integral (oferta institucional).
<br>
- Vinculación con empresas e instituciones.
<br>
- Aporte de $250.000 para el desarrollo del proyecto o tesis innovadora.

<h3>¿Cómo participar?</h3>
Los requisitos para postular son:
<br>
- Ser alumno regular de alguna carrera de la Universidad del Bío-Bío, campus Concepción o Chillán.
<br>
- Estar habilitado para inscribir actividad de titulación (seminario 1 o 2, tesis, proyecto de título, taller de título, etc.).
Para inscribirse debe completar el formulario on line con sus datos. Ingresa aquí al formulario de inscripción. Cupos limitados.

<h3>Contacto</h3>
Te puedes contactar con el coordinador del Programa EPI, Claudio Inzunza, a través de su correo electrónico, cinzunza@ubiobio.cl, o al anexo 311 1048.
</p>
		</div>
	</div>

	<div id="segundaria"> 
		<?php  
			$imageUrl = "".Yii::app()->request->baseUrl."/images/convocatorias-inscribete.png";
			$image = '<img src="'.$imageUrl.'" style="margin-bottom: 35px;" >';
			echo CHtml::link($image, array('/alumno/create'));
		?>
		<div class="lateralRedes" ><div class="fb-like-box" data-href="https://www.facebook.com/programaepi" data-width="306" data-height="266" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="false"></div></div>
			


		<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/convocatorias_twitter.png" style="margin-bottom: 10px;">
	</div>

</div>


