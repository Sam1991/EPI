<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	

	<!-- boostrap -->
	<!-- <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap-3.3.1-dist/dist/css/bootstrap.min.css" /> -->

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

<div class="container" id="page">

	<div id="header">


		<TABLE>
			<TR>
				<TD>
					<?php  
					$imageUrl = "".Yii::app()->request->baseUrl."/images/header_logoEpi.png";
					$image = '<img src="'.$imageUrl.'" style="margin-left: 50px" >';
					echo CHtml::link($image, array('/site/index'));
					?>
				</TD> 
				<TD>
					<div style="margin-top: 20px;display: inline-block;">
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
					$image = '<img src="'.$imageUrl.'" style="display:inline-block;float: right;margin-right: 3%;" >';
					echo CHtml::link($image, array('/alumno/create'));
				?>
			
			

<div id="mainmenu">
				<div id="links">
					<?php $this->widget('zii.widgets.CMenu',array(
						'items'=>array(
							// array('label'=>'Home', 'url'=>array('/site/index')),
							// array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
							// array('label'=>'Contact', 'url'=>array('/site/contact')),
							

							//CRUGE
								// array('label'=>'Administrar Usuarios'
								// 	, 'url'=>Yii::app()->user->ui->userManagementAdminUrl
								// 	, 'visible'=>Yii::app()->user->isSuperAdmin),
							
							//actores externos
								array('label'=>'Programa EPI', 'url'=>array('site/page', 'view'=>'programaEpi'),'visible'=>(!Yii::app()->user->isSuperAdmin)),
								array('label'=>'Convocatorias', 'url'=>array('site/page', 'view'=>'convocatorias'),'visible'=>(!Yii::app()->user->isSuperAdmin)),
								array('label'=>'Noticias', 'url'=>array('/noticia/index'),'visible'=>(!Yii::app()->user->isSuperAdmin)),
								array('label'=>'Galeria', 'url'=>array('site/page','view'=>'galeria'),'visible'=>(!Yii::app()->user->isSuperAdmin)),
								array('label'=>'Contacto', 'url'=>array('consulta/create'),'visible'=>(!Yii::app()->user->isSuperAdmin)),
								

								
								//link a crear un alumno
								
								//link a alumnos
								
								array('label'=>'Ingresar', 'url'=>Yii::app()->user->ui->loginUrl, 'visible'=>Yii::app()->user->isGuest,'itemOptions'=>array('style'=>'background-color: #bebebe;')),
					
								


								//link administrador
								array('label'=>'Noticias', 'url'=>array('/noticia/create'), 'visible'=>(Yii::app()->user->isSuperAdmin)),
								array('label'=>'Inscritos', 'url'=>array('/alumno/admin'), 'visible'=>(Yii::app()->user->isSuperAdmin)),
								array('label'=>'Consultas', 'url'=>array('/consulta/admin'), 'visible'=>(Yii::app()->user->isSuperAdmin)),

								

								array('label'=>'Salir ('.Yii::app()->user->name.')', 'url'=>Yii::app()->user->ui->logoutUrl	, 'visible'=>!Yii::app()->user->isGuest),
								),
					)); ?>
				</div>
				<div id="redesSociales">
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
			
				</TD>
			</TR>
			
		</TABLE>
		

	</div><!-- header -->



	
	<?php echo $content; ?>
	
	<div id="footer">
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/index_footer.png" >
	</div>

	
</div><!-- page -->

</body>
</html>


