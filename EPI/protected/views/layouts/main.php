<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

	<!-- boostrap -->
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap-3.3.1-dist/dist/css/bootstrap.min.css" />



    <!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/engine1/style.css" />
	 <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->

	<!-- para que funcione el menu responsive -->
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>        -->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>      
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap-3.3.1-dist/dist/js/bootstrap.min.js"></script>

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

	<div class="container" id="page" style="padding:0px;margin:0px;">

		<div id="header">

			<?php  
				$imageUrl = "".Yii::app()->request->baseUrl."/images/header_logoEpi.png";
				$image = '<img src="'.$imageUrl.'" style="position: absolute;" id="imgLogo" >';
				echo CHtml::link($image, array('/site/index'));
			?>
			
			<div id="auspiciadores" style="margin-top: 20px;margin-left: 300px;">
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/header_logosAuspiciadores1.png" style="margin-left: 305px;vertical-align: top;">
				<?php  
					$imageUrl = "".Yii::app()->request->baseUrl."/images/header_logosAuspiciadores2.png";
					$image = '<img src="'.$imageUrl.'" style="vertical-align: top;" >';
					echo CHtml::link($image, 'http://www.ubiobio.cl/cdinesubb/');
					?>
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/header_logosAuspiciadores3.1.png" style="vertical-align: top;">
				<?php  
					$imageUrl = "".Yii::app()->request->baseUrl."/images/header_logosAuspiciadores3.2.png";
					$image = '<img src="'.$imageUrl.'" style="vertical-align: top;" >';
					echo CHtml::link($image, 'http://www.dgi.ubiobio.cl');
				?>
			</div>
				
			<?php  
				$imageUrl = "".Yii::app()->request->baseUrl."/images/btn_inscripcion.png";
				$image = '<img src="'.$imageUrl.'" style="display:inline-block;float: right;margin-right: 3%;" id="imgInscripcion">';
				echo CHtml::link($image, array('/alumno/create'));
			?>
				
				
			<div id="mainmenu">

				<nav class="navbar navbar-default top-navbar" role="navigation" style="border: none;background: white;display: inline-block;">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex-collapse">
							<span class="sr-only">Expand the menu</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
			
					<div class="collapse navbar-collapse navbar-ex-collapse">
						<?php $this->widget('zii.widgets.CMenu',array(
							'items'=>array(
								// array('label'=>'Home', 'url'=>array('/site/index')),
								// array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
								// array('label'=>'Contact', 'url'=>array('/site/contact')),

								//CRUGE
									// array('label'=>'Administrar Usuarios'
									// 	, 'url'=>Yii::app()->user->ui->userManagementAdminUrl
									// 	, 'visible'=>Yii::app()->user->isSuperAdmin),

								//links externos
									array('label'=>'Programa EPI', 'url'=>array('site/page', 'view'=>'programaEpi'),'visible'=>(!Yii::app()->user->isSuperAdmin)),
									array('label'=>'Convocatorias', 'url'=>array('site/page', 'view'=>'convocatorias'),'visible'=>(!Yii::app()->user->isSuperAdmin)),
									array('label'=>'Noticias', 'url'=>array('/noticia/index'),'visible'=>(!Yii::app()->user->isSuperAdmin)),
									array('label'=>'Galeria', 'url'=>array('site/page','view'=>'galeria'),'visible'=>(!Yii::app()->user->isSuperAdmin)),
									array('label'=>'Contacto', 'url'=>array('consulta/create'),'visible'=>(!Yii::app()->user->checkAccess('alumno'))),
									array('label'=>'Ingresar', 'url'=>Yii::app()->user->ui->loginUrl, 'visible'=>Yii::app()->user->isGuest,'itemOptions'=>array('style'=>'background-color: #bebebe;')),

									
								//link para alumnos
									array('label'=>'Contacto', 'url'=>array('consulta/create'),'visible'=>(Yii::app()->user->checkAccess('alumno')&&!Yii::app()->user->isSuperAdmin)),
									array('label'=>'Actividades', 'url'=>array('actividades/index'),'visible'=>(Yii::app()->user->checkAccess('alumno')&&!Yii::app()->user->isSuperAdmin)),
									array('label'=>'Estado postulacion', 'url'=>array('estadopostulacion/admin'),'visible'=>(Yii::app()->user->checkAccess('alumno')&&!Yii::app()->user->isSuperAdmin)),

								//link administrador
									array('label'=>'Noticias', 'url'=>array('/noticia/create'), 'visible'=>(Yii::app()->user->isSuperAdmin)),
									array('label'=>'Inscritos', 'url'=>array('/alumno/admin'), 'visible'=>(Yii::app()->user->isSuperAdmin)),
									array('label'=>'Consultas externas', 'url'=>array('/consulta/admin'), 'visible'=>(Yii::app()->user->isSuperAdmin)),
									array('label'=>'Consultas internas', 'url'=>array('/consultainterna/admin'), 'visible'=>(Yii::app()->user->isSuperAdmin)),
									array('label'=>'Actividades', 'url'=>array('/actividades/admin'), 'visible'=>(Yii::app()->user->isSuperAdmin)),
									array('label'=>'Estado postulacion', 'url'=>array('estadopostulacion/admin'), 'visible'=>(Yii::app()->user->isSuperAdmin)),

										

									array('label'=>'Salir ('.Yii::app()->user->name.')', 'url'=>Yii::app()->user->ui->logoutUrl	, 'visible'=>!Yii::app()->user->isGuest),
									),
								'activeCssClass' => 'active',
								'htmlOptions' => array('class'=>'nav navbar-nav',),
								
							)); ?>
					</div>
				</nav>
				<div id="redesSociales" >
					<?php  
						$imageUrl = "".Yii::app()->request->baseUrl."/images/logo_face.png";
						$image = '<img src="'.$imageUrl.'" style="display:inline-block;float: right;margin-right: 3%;" >';
						echo CHtml::link($image,  'http://www.facebook.com/programaepi?ref=hl');
							
						$imageUrl = "".Yii::app()->request->baseUrl."/images/logo_twitter.png";
						$image = '<img src="'.$imageUrl.'" style="display:inline-block;float: right;margin-right: 3%;" >';
						echo CHtml::link($image, 'http://www.twitter.com/programaepi');
							
						$imageUrl = "".Yii::app()->request->baseUrl."/images/logo_linkedin.png";
						$image = '<img src="'.$imageUrl.'" style="display:inline-block;float: right;margin-right: 3%;" >';
						echo CHtml::link($image, 'http://cl.linkedin.com/in/innovacionUBB');
							
						$imageUrl = "".Yii::app()->request->baseUrl."/images/logo_youtube.png";
						$image = '<img src="'.$imageUrl.'" style="display:inline-block;float: right;margin-right: 3%;" >';
						echo CHtml::link($image, 'https://www.youtube.com/channel/UCHxdayTfL2vJZqekkKO-ZoQ');
					?>	
				</div>
			</div><!-- mainmenu -->

		</div><!-- header -->

		<?php echo $content; ?>
		
		<div id="footer">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/index_footer.png" >
		</div>

		
	</div><!-- page -->

</body>
</html>


<style>

	form input[type="text"], textarea, input[type="password"]{
		border: 2px solid red;
		width: 460px;
	}

	form input[type="text"],input[type="password"]{
		height: 25px;
	}

	form input[type="submit"]{
		color: white;
		background: red;
		font-size: 12px;
		font-family: Verdana,Helvetica;
		font-weight: bold;
		border: 0px;
		width: 80px;
		height: 30px;
		border-radius: 15px;
	}
	#alumnoInscripcion{
		margin-left: 180px;
	}
	#auspiciadores{
		display: inline-block;
	}

	#redesSociales{
		display: inline;
	}
	.navbar-header{
		width: 197px;
	}
	#imgLogo{
		margin-left: 50px;
	}
	.descripcion{
		margin-left: 52px;
	}

	.inscripcion{
		margin-left: 65px;
	}

	.inscripcion .titulo{
		text-align: center;
		margin-top: 100px; 
		margin-bottom: 80px; 
	}

	#divImagenNoticia, #imagenNoticia{
		width: 500px;
	}

	#divImagenNoticia{
		float: left;
		margin-right: 30px;
		max-height: 500px;
		overflow: hidden;
	}

		@media all and (max-width: 767px){

			#logon-form input[type="text"], textarea, input[type="password"]{
				width:100%;
			} 

			#principal div.form{
				padding-left: 0px;
			}

			#divImagenNoticia, #imagenNoticia{
				width: 95%;
			}

			#divImagenNoticia{
				overflow: hidden;
				margin-right: 0px;
				float: none;
			}
			.inscripcion .titulo {
				margin-top: 0px;
				margin-bottom: 10px;
			}		
			.inscripcion{
				display: block;
			}
			#alumnoInscripcion{
			margin-left: 0px;	
			}
			#alumno-form *{
				max-width: 90%;
			}
			.inscripcion div.form{
				width: 100%;
				padding-left: 0px;
			}
			#content{
				text-align: -webkit-center;
			}
			.inscripcion{
				margin-left: 0px;
				width: 100%;
				height: inherit;
			}

			#consulta-form *{
				max-width: 100%;
				padding-left: 0px;
			}
			#principal{
				width: 100%;
				display: inline-block;
				margin-left: 0px;
				margin-right: 0px;
				text-align: center;
			}
			#principal div{
				margin-left: 0px;
			}

			#principal img{
				max-width: 90%;
			}
			#segundaria{
				display: none;
			}
			#header{
				height: 185px;
			}
			.imgBeneficio{
				width: 100%;
			}
			#redesIndex{
				width:70%;
			}
			#galeriaIndex{
				/*width: 100%*/
				display: none;
			}
			#imgLogo{
				margin-top: 50px;
				margin-left: 0px;
			}
			.navbar{
				/*position: absolute;*/
				z-index: 1001;
				margin-top: 135px;
			}

			#redesSociales{
				display: none;
			}
			#imgInscripcion{
				position: absolute;
				/*	top: 5px;
				left: 0px;*/
			}

			#wowslider-container1{
				/*margin-top: 136px;*/
			}
			#auspiciadores{
				display: none;
			}
			/*#mainmenu{
				position: absolute;
				left: 0px;
				top: 120px;
			}*/
			/*#redesSociales{
				position: absolute;
				top: -110px;
				left: 200px;
			}*/
		} /*fin_media width 767*/

	#page{
		width: 100%;
	}
</style>


