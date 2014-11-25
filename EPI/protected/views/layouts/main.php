<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

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
		<div id="logo" style="display: inline-block;"><?php echo CHtml::encode(Yii::app()->name); ?></div>
		<?php  
			$imageUrl = "".Yii::app()->request->baseUrl."/images/btn_inscripcion.png";
			$image = '<img src="'.$imageUrl.'" style="display:inline-block;float: right;margin-right: 3%;" >';
			echo CHtml::link($image, array('/alumno/create'));
		?>

		
		

	</div><!-- header -->

	<div id="mainmenu">
		<div id="links">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				// array('label'=>'Home', 'url'=>array('/site/index')),
				// array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				// array('label'=>'Contact', 'url'=>array('/site/contact')),
				

				//CRUGE
					array('label'=>'Administrar Usuarios'
						, 'url'=>Yii::app()->user->ui->userManagementAdminUrl
						, 'visible'=>Yii::app()->user->isSuperAdmin),
				
				//TODOS
					

					array('label'=>'Programa EPI', 'url'=>array('')),
					array('label'=>'Convocatorias', 'url'=>array('')),
					array('label'=>'Noticias', 'url'=>array('/noticia/index')),
					array('label'=>'Galeria', 'url'=>array('')),
					array('label'=>'Contacto', 'url'=>array('')),
					//link a crear un alumno
					
					//link a alumnos
					
					array('label'=>'Ingresar', 'url'=>Yii::app()->user->ui->loginUrl, 'visible'=>Yii::app()->user->isGuest),
		
					array('label'=>'Salir ('.Yii::app()->user->name.')', 'url'=>Yii::app()->user->ui->logoutUrl	, 'visible'=>!Yii::app()->user->isGuest),


				
					
					


					),
		)); ?>
		</div>
		<div id="redesSociales">
			<?php  
			$imageUrl = "".Yii::app()->request->baseUrl."/images/logo_face.png";
			$image = '<img src="'.$imageUrl.'" style="display:inline-block;float: right;margin-right: 3%;" >';
			
			echo CHtml::link($image, array('/alumno/create'));
			$imageUrl = "".Yii::app()->request->baseUrl."/images/logo_twitter.png";
			$image = '<img src="'.$imageUrl.'" style="display:inline-block;float: right;margin-right: 3%;" >';
			echo CHtml::link($image, array('/alumno/create'));
			
			$imageUrl = "".Yii::app()->request->baseUrl."/images/logo_linkedin.png";
			$image = '<img src="'.$imageUrl.'" style="display:inline-block;float: right;margin-right: 3%;" >';
			echo CHtml::link($image, array('/alumno/create'));
			
			$imageUrl = "".Yii::app()->request->baseUrl."/images/logo_youtube.png";
			$image = '<img src="'.$imageUrl.'" style="display:inline-block;float: right;margin-right: 3%;" >';
			echo CHtml::link($image, array('/alumno/create'));
		?>	
		</div>
		

	</div><!-- mainmenu -->

	
	<?php echo $content; ?>
	<div id="footer">
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/footer.png" >
	</div>

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	
	

	
</div><!-- page -->

</body>
</html>

